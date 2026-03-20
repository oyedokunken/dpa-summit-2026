<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Log;

class MailService
{
    private PHPMailer $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
        $this->configure();
    }

    private function configure(): void
    {
        try {
            // Server settings
            $this->mailer->isSMTP();
            $this->mailer->Host = config('mail.host', env('MAIL_HOST', 'smtp.gmail.com'));
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = config('mail.username', env('MAIL_USERNAME'));
            $this->mailer->Password = config('mail.password', env('MAIL_PASSWORD'));
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mailer->Port = config('mail.port', env('MAIL_PORT', 587));

            // Default sender
            $this->mailer->setFrom(
                config('mail.from.address', env('MAIL_FROM_ADDRESS', 'noreply@dpa-summit.com')),
                config('mail.from.name', env('MAIL_FROM_NAME', 'DPA Summit 2026'))
            );

            // Default reply-to
            $this->mailer->addReplyTo(
                config('mail.reply_to.address', env('MAIL_REPLY_TO', 'info@dpa-summit.com')),
                config('mail.reply_to.name', env('MAIL_REPLY_TO_NAME', 'DPA Summit Team'))
            );

        } catch (Exception $e) {
            Log::error('PHPMailer configuration failed: ' . $e->getMessage());
            throw new \Exception('Mail service configuration error');
        }
    }

    public function sendRegistrationConfirmation(array $data): bool
    {
        try {
            $this->mailer->addAddress($data['email'], $data['full_name']);
            $this->mailer->Subject = 'Registration Confirmed - Africa Digital Procurement Summit 2026';
            
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->getRegistrationTemplate($data);
            $this->mailer->AltBody = $this->getRegistrationTextTemplate($data);

            $result = $this->mailer->send();
            
            // Send notification to admin
            $this->sendAdminNotification($data, 'registration');
            
            return $result;

        } catch (Exception $e) {
            Log::error('Registration email failed: ' . $e->getMessage());
            return false;
        }
    }

    public function sendContactForm(array $data): bool
    {
        try {
            // Send to admin
            $this->mailer->addAddress(
                config('mail.admin.address', env('MAIL_ADMIN_ADDRESS', 'admin@dpa-summit.com')),
                'DPA Summit Admin'
            );
            $this->mailer->Subject = 'New Contact Form Submission - DPA Summit 2026';
            
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->getContactTemplate($data);
            $this->mailer->AltBody = $this->getContactTextTemplate($data);

            $result = $this->mailer->send();
            
            // Send confirmation to user
            $this->sendContactConfirmation($data);
            
            return $result;

        } catch (Exception $e) {
            Log::error('Contact form email failed: ' . $e->getMessage());
            return false;
        }
    }

    public function sendInquiryNotification(array $data): bool
    {
        try {
            $this->mailer->addAddress(
                config('mail.inquiries.address', env('MAIL_INQUIRIES_ADDRESS', 'inquiries@dpa-summit.com')),
                'DPA Summit Inquiries'
            );
            $this->mailer->Subject = 'New Inquiry - Africa Digital Procurement Summit 2026';
            
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->getInquiryTemplate($data);
            $this->mailer->AltBody = $this->getInquiryTextTemplate($data);

            return $this->mailer->send();

        } catch (Exception $e) {
            Log::error('Inquiry email failed: ' . $e->getMessage());
            return false;
        }
    }

    private function sendAdminNotification(array $data, string $type): void
    {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress(
                config('mail.admin.address', env('MAIL_ADMIN_ADDRESS', 'admin@dpa-summit.com')),
                'DPA Summit Admin'
            );
            
            $subject = match($type) {
                'registration' => 'New Registration - DPA Summit 2026',
                default => 'New Submission - DPA Summit 2026'
            };
            
            $this->mailer->Subject = $subject;
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->getAdminTemplate($data, $type);
            $this->mailer->send();

        } catch (Exception $e) {
            Log::error('Admin notification failed: ' . $e->getMessage());
        }
    }

    private function sendContactConfirmation(array $data): void
    {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($data['email'], $data['name']);
            $this->mailer->Subject = 'We received your message - DPA Summit 2026';
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->getContactConfirmationTemplate($data);
            $this->mailer->send();

        } catch (Exception $e) {
            Log::error('Contact confirmation failed: ' . $e->getMessage());
        }
    }

    // Email Templates
    private function getRegistrationTemplate(array $data): string
    {
        return "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .header { background: #2563eb; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; }
                .footer { background: #f8f9fa; padding: 20px; text-align: center; font-size: 12px; }
                .button { background: #2563eb; color: white; padding: 12px 24px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px 0; }
            </style>
        </head>
        <body>
            <div class='header'>
                <h1>Africa Digital Procurement Summit 2026</h1>
                <p>Accelerating Procurement Transformation for Large Enterprises</p>
            </div>
            <div class='content'>
                <h2>Registration Confirmed!</h2>
                <p>Dear {$data['full_name']},</p>
                <p>Thank you for registering for the Africa Digital Procurement Summit 2026. We're excited to have you join us!</p>
                
                <h3>Event Details:</h3>
                <ul>
                    <li><strong>Date:</strong> May 26, 2026</li>
                    <li><strong>Location:</strong> Eko Hotels and Suites, Victoria Island, Lagos</li>
                    <li><strong>Your Position:</strong> {$data['job_title']}</li>
                    <li><strong>Company:</strong> {$data['company']}</li>
                </ul>
                
                <p>What happens next:</p>
                <ul>
                    <li>You'll receive your event badge at the registration desk</li>
                    <li>Join us for networking sessions with industry leaders</li>
                    <li>Access to all keynote sessions and workshops</li>
                </ul>
                
                <a href='https://www.dpa-summit.com/agenda' class='button'>View Full Agenda</a>
                
                <p>For any questions, please contact us at <a href='mailto:info@dpa-summit.com'>info@dpa-summit.com</a></p>
                
                <p>We look forward to welcoming you!</p>
                <p>Best regards,<br>The DPA Summit 2026 Team</p>
            </div>
            <div class='footer'>
                <p>© 2026 Gloopro Procurement Systems. All rights reserved.</p>
                <p>Eko Hotels and Suites, Victoria Island, Lagos, Nigeria</p>
            </div>
        </body>
        </html>";
    }

    private function getRegistrationTextTemplate(array $data): string
    {
        return "
AFRICA DIGITAL PROCUREMENT SUMMIT 2026 - REGISTRATION CONFIRMED

Dear {$data['full_name']},

Thank you for registering for the Africa Digital Procurement Summit 2026.

EVENT DETAILS:
Date: May 26, 2026
Location: Eko Hotels and Suites, Victoria Island, Lagos
Your Position: {$data['job_title']}
Company: {$data['company']}

What happens next:
- You'll receive your event badge at the registration desk
- Join us for networking sessions with industry leaders  
- Access to all keynote sessions and workshops

For questions: info@dpa-summit.com

We look forward to welcoming you!

Best regards,
The DPA Summit 2026 Team
© 2026 Gloopro Procurement Systems
        ";
    }

    private function getContactTemplate(array $data): string
    {
        return "
        <html>
        <head><style>body{font-family:Arial,sans-serif;line-height:1.6;color:#333}.header{background:#2563eb;color:white;padding:20px;text-align:center}.content{padding:20px}.field{margin:10px 0}.field strong{color:#2563eb}</style></head>
        <body>
            <div class='header'><h1>New Contact Form Submission</h1></div>
            <div class='content'>
                <h2>Contact Details:</h2>
                <div class='field'><strong>Name:</strong> {$data['name']}</div>
                <div class='field'><strong>Email:</strong> {$data['email']}</div>
                <div class='field'><strong>Phone:</strong> " . ($data['phone'] ?? 'Not provided') . "</div>
                <div class='field'><strong>Company:</strong> " . ($data['company'] ?? 'Not provided') . "</div>
                <div class='field'><strong>Subject:</strong> {$data['subject']}</div>
                <div class='field'><strong>Message:</strong><br>" . nl2br(htmlspecialchars($data['message'])) . "</div>
                <div class='field'><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</div>
                <p><strong>Action Required:</strong> Please respond to this inquiry within 24 hours.</p>
            </div>
        </body>
        </html>";
    }

    private function getContactTextTemplate(array $data): string
    {
        return "
NEW CONTACT FORM SUBMISSION - DPA SUMMIT 2026

Name: {$data['name']}
Email: {$data['email']}
Phone: " . ($data['phone'] ?? 'Not provided') . "
Company: " . ($data['company'] ?? 'Not provided') . "
Subject: {$data['subject']}

Message:
" . $data['message'] . "

Submitted: " . date('Y-m-d H:i:s') . "

ACTION REQUIRED: Please respond within 24 hours.
        ";
    }

    private function getInquiryTemplate(array $data): string
    {
        return "
        <html>
        <head><style>body{font-family:Arial,sans-serif;line-height:1.6;color:#333}.header{background:#2563eb;color:white;padding:20px;text-align:center}.content{padding:20px}.field{margin:10px 0}.field strong{color:#2563eb}</style></head>
        <body>
            <div class='header'><h1>New Partnership Inquiry</h1></div>
            <div class='content'>
                <h2>Inquiry Details:</h2>
                <div class='field'><strong>Name:</strong> {$data['name']}</div>
                <div class='field'><strong>Email:</strong> {$data['email']}</div>
                <div class='field'><strong>Company:</strong> {$data['company']}</div>
                <div class='field'><strong>Partnership Type:</strong> {$data['partnership_type']}</div>
                <div class='field'><strong>Message:</strong><br>" . nl2br(htmlspecialchars($data['message'])) . "</div>
                <div class='field'><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</div>
                <p><strong>Action Required:</strong> Forward to partnerships team for follow-up.</p>
            </div>
        </body>
        </html>";
    }

    private function getInquiryTextTemplate(array $data): string
    {
        return "
NEW PARTNERSHIP INQUIRY - DPA SUMMIT 2026

Name: {$data['name']}
Email: {$data['email']}
Company: {$data['company']}
Partnership Type: {$data['partnership_type']}

Message:
" . $data['message'] . "

Submitted: " . date('Y-m-d H:i:s') . "

ACTION REQUIRED: Forward to partnerships team.
        ";
    }

    private function getAdminTemplate(array $data, string $type): string
    {
        $title = $type === 'registration' ? 'New Registration' : 'New Submission';
        return "
        <html>
        <head><style>body{font-family:Arial,sans-serif;line-height:1.6;color:#333}.header{background:#2563eb;color:white;padding:20px;text-align:center}.content{padding:20px}.field{margin:10px 0}.field strong{color:#2563eb}</style></head>
        <body>
            <div class='header'><h1>{$title} - DPA Summit 2026</h1></div>
            <div class='content'>
                <h2>Details:</h2>
                <div class='field'><strong>Name:</strong> " . ($data['full_name'] ?? $data['name']) . "</div>
                <div class='field'><strong>Email:</strong> {$data['email']}</div>
                <div class='field'><strong>Company:</strong> " . ($data['company'] ?? 'Not provided') . "</div>
                <div class='field'><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</div>
                <p><strong>Action Required:</strong> Review and follow up as needed.</p>
            </div>
        </body>
        </html>";
    }

    private function getContactConfirmationTemplate(array $data): string
    {
        return "
        <html>
        <head><style>body{font-family:Arial,sans-serif;line-height:1.6;color:#333}.header{background:#2563eb;color:white;padding:20px;text-align:center}.content{padding:20px}</style></head>
        <body>
            <div class='header'><h1>DPA Summit 2026</h1></div>
            <div class='content'>
                <h2>Message Received!</h2>
                <p>Dear {$data['name']},</p>
                <p>Thank you for contacting us. We've received your message and will respond within 24 hours.</p>
                <p><strong>Your Message:</strong><br>" . nl2br(htmlspecialchars($data['message'])) . "</p>
                <p>For urgent inquiries, call us at +234-XXX-XXXX or email info@dpa-summit.com</p>
                <p>Best regards,<br>The DPA Summit 2026 Team</p>
            </div>
        </body>
        </html>";
    }
}
