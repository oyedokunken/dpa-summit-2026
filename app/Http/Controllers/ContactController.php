<?php

namespace App\Http\Controllers;

use App\Services\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    private MailService $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function showForm()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:200',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000|min:10',
            'contact_preference' => 'required|in:email,phone,both',
        ], [
            'name.required' => 'Your name is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Please provide a valid email address',
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required',
            'message.min' => 'Message must be at least 10 characters long',
            'contact_preference.required' => 'Please select your preferred contact method',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contactData = $request->all();

            // Send contact form email
            $emailSent = $this->mailService->sendContactForm($contactData);

            if (!$emailSent) {
                Log::error('Failed to send contact form email', [
                    'email' => $request->email,
                    'name' => $request->name,
                    'subject' => $request->subject
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'Message received but notification failed. Please contact support directly.'
                ], 500);
            }

            // Log successful contact submission
            Log::info('New contact form submission', [
                'email' => $request->email,
                'name' => $request->name,
                'subject' => $request->subject,
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully! We\'ll respond within 24 hours.',
                'data' => [
                    'name' => $request->name,
                    'email' => $request->email
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'email' => $request->email,
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending your message. Please try again or contact support directly.'
            ], 500);
        }
    }

    public function showPartnershipForm()
    {
        return view('partnership');
    }

    public function submitPartnership(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:200',
            'job_title' => 'required|string|max:150',
            'partnership_type' => 'required|in:sponsorship,exhibitor,media_partner,other',
            'company_website' => 'nullable|url|max:255',
            'message' => 'required|string|max:2000|min:50',
            'budget_range' => 'nullable|string|max:100',
        ], [
            'name.required' => 'Your name is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Please provide a valid email address',
            'company.required' => 'Company name is required',
            'job_title.required' => 'Job title is required',
            'partnership_type.required' => 'Please select a partnership type',
            'message.required' => 'Message is required',
            'message.min' => 'Message must be at least 50 characters long',
            'company_website.url' => 'Please provide a valid website URL',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $partnershipData = $request->all();

            // Send partnership inquiry email
            $emailSent = $this->mailService->sendInquiryNotification($partnershipData);

            if (!$emailSent) {
                Log::error('Failed to send partnership inquiry email', [
                    'email' => $request->email,
                    'company' => $request->company,
                    'partnership_type' => $request->partnership_type
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'Inquiry received but notification failed. Please contact partnerships team directly.'
                ], 500);
            }

            // Log successful partnership inquiry
            Log::info('New partnership inquiry submitted', [
                'email' => $request->email,
                'company' => $request->company,
                'partnership_type' => $request->partnership_type,
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Partnership inquiry submitted successfully! Our partnerships team will contact you within 48 hours.',
                'data' => [
                    'name' => $request->name,
                    'company' => $request->company,
                    'partnership_type' => $request->partnership_type
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Partnership inquiry submission failed', [
                'error' => $e->getMessage(),
                'email' => $request->email,
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting your inquiry. Please try again or contact partnerships team directly.'
            ], 500);
        }
    }
}
