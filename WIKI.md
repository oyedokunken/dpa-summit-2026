Wiki Page 1: Architecture & Design Patterns
Title: System Architecture

Content:
The DPA Summit website follows a classic MVC (Model-View-Controller) architecture, leveraging Laravel's robust backend capabilities and Tailwind CSS for a utility-first frontend.

Frontend Logic:

Framework: Blade Templating Engine.
Styling: Tailwind CSS (compiled via Vite).
Interactivity: Vanilla JavaScript. No heavy frameworks (React/Vue) were used to ensure maximum page speed and SEO crawlability.
Dual-Tab Strategy: Implemented in resources/js/app.js. Uses window.open() to trigger the partner site load on page entry.
Backend Logic:

Routing: Defined in routes/web.php. Named routes are used for maintainability (e.g., route('agenda')).
Controllers: Handle form submissions (Contact & Registration) and data validation.
Database: Eloquent ORM manages interactions with the MySQL database.
Key Design Decisions:

No SPA (Single Page App): We chose a Multi-Page Application (MPA) structure to strictly follow SEO best practices for event marketing, ensuring every session and speaker page has its own indexable URL.
Asset Compilation: Vite is used for hot module replacement (HMR) during development and optimized minification for production.
Wiki Page 2: Deployment Guide
Title: Production Deployment

Content:
This guide outlines the steps to deploy the DPA Summit website to the production environment (AWS).

Prerequisites:

Access to AWS EC2 or S3 bucket.
Production MySQL database instance.
Composer and Node.js installed on the production server.
Steps:

Code Deployment:
Pull the latest code from the main branch on GitHub.
Run composer install --optimize-autoloader --no-dev.
Run npm install && npm run build.
Environment Configuration:
Copy .env.example to .env.
Set APP_ENV=production and APP_DEBUG=false.
Update database credentials and AWS S3 keys in .env.
Run php artisan key:generate.
Database Setup:
Run php artisan migrate --force.
Caching:
Cache configuration: php artisan config:cache.
Cache routes: php artisan route:cache.
Cache views: php artisan view:cache.
Permissions:
Ensure storage and bootstrap/cache directories are writable by the web server.
Wiki Page 3: SEO & Dual Tab Strategy
Title: SEO & Cross-Site Traffic Implementation

Content:

SEO Strategy:

Meta Tags: Dynamic title and description tags are implemented in the Master Layout.
Schema.org: We utilize Event schema markup in the Home and Agenda views. This allows Google to display the event date, location, and ticket status directly in search results (Rich Snippets).
Performance: Images are lazy-loaded; CSS/JS is minified via Vite to ensure high Core Web Vitals scores.
Dual-Tab Strategy (Gloopro <-> DPA):

Objective: When a user lands on the DPA website, the Gloopro corporate site should open in a new tab (and vice-versa).
Implementation:
Script location: resources/js/app.js.
Logic: Uses window.open() triggered on the DOMContentLoaded event.
Fallback: If the browser blocks the automatic popup (common behavior), a prominent sticky banner is displayed with a manual "Visit Partner Site" button.
SEO Impact: Minimal risk, as the script runs client-side after the initial page load.
Wiki Page 4: SEO Implementation Guide
Title: Search Engine Optimization & Social Media

Content:
The DPA Summit website implements comprehensive SEO strategies to maximize visibility and search rankings.

SEO Components:

Meta Tags Implementation:
Use the seo-meta.blade.php component in your master layout:
@include('layouts.seo-meta', [
    'title' => 'Page Title',
    'description' => 'Page description for search engines',
    'keywords' => 'keyword1, keyword2, keyword3',
    'og_image' => asset('images/page-specific-og-image.jpg')
])

Schema.org Markup:
Event Schema is automatically included in the meta component for rich snippets in Google search results.
Additional schemas can be added per page using the $schema variable.

Open Graph Optimization:
Facebook, Twitter, and LinkedIn sharing cards are automatically generated.
Ensure all pages have appropriate og:image (1200x630px) for social sharing.

XML Sitemap:
Located at /public/sitemap.xml with all pages and priority rankings.
Update sitemap when adding new pages.

robots.txt Configuration:
Blocks access to sensitive Laravel directories.
Allows crawling of public assets and pages.
Blocks unwanted bots while allowing major search engines.

Performance SEO:
- Gzip compression enabled via .htaccess
- Browser caching configured for static assets
- Image optimization with WebP support
- CSS/JS minification via Vite

Technical SEO:
- Clean URLs with Laravel routing
- Proper heading structure (H1, H2, H3)
- Alt tags for all images
- Internal linking strategy
- Mobile-responsive design

Wiki Page 5: Email System Configuration
Title: PHPMailer Setup & Email Templates

Content:
The DPA Summit uses PHPMailer for reliable email delivery of registrations and contact forms.

Email Service Architecture:

MailService Class:
Located at app/Services/MailService.php
Handles all email functionality with professional HTML templates
Supports registration confirmations, contact forms, and partnership inquiries
Includes error handling and logging

Configuration Requirements:
Add these to your .env file:
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@dpa-summit.com
MAIL_FROM_NAME="DPA Summit 2026"
MAIL_ADMIN_ADDRESS=admin@dpa-summit.com
MAIL_INQUIRIES_ADDRESS=partnerships@dpa-summit.com

Email Templates:
Registration Confirmation:
- Professional HTML design with event details
- Automatic admin notification
- Personalized content with registrant information

Contact Form:
- User inquiry forwarded to admin team
- Automatic confirmation to user
- Includes all form fields and submission timestamp

Partnership Inquiries:
- Sent to partnerships team
- Includes company and partnership type details
- Follow-up required within 48 hours

Controllers Integration:
RegistrationController: Handles form submission and validation
ContactController: Manages contact forms and partnership inquiries
Both include comprehensive error handling and JSON responses

Testing Email Configuration:
1. Set up SMTP credentials in .env
2. Test with a registration form submission
3. Check logs for any email delivery issues
4. Verify email templates render correctly

Troubleshooting:
- Enable debug mode in PHPMailer for detailed error logs
- Check SMTP credentials and firewall settings
- Verify email addresses are not marked as spam
- Test with different email providers

Wiki Page 6: Security & Performance
Title: Security Headers and Performance Optimization

Content:
The website implements comprehensive security and performance optimizations.

Security Features:

HTTP Headers:
Content Security Policy (CSP): Prevents XSS attacks
X-XSS-Protection: Browser XSS filtering
X-Frame-Options: Prevents clickjacking
X-Content-Type-Options: Prevents MIME sniffing
Strict Transport Security (HSTS): HTTPS enforcement (production)
Referrer Policy: Controls referrer information

Input Validation:
All forms use Laravel validation rules
Sanitized input to prevent SQL injection
CSRF protection enabled
Rate limiting for form submissions

File Security:
Sensitive files blocked via .htaccess
Directory listing disabled
Proper file permissions set
Environment variables protected

Performance Optimizations:

Asset Compression:
Gzip compression for all text-based assets
CSS/JS minification via Vite
Image optimization with WebP support
Browser caching with appropriate headers

Caching Strategy:
Static assets cached for 1 year
HTML pages cached for immediate revalidation
Database query caching enabled
Route caching for production

CDN Ready:
Asset paths are CDN-friendly
Versioned filenames for cache busting
Preconnect and DNS prefetch for external resources
Lazy loading for images

Monitoring:
Core Web Vitals tracking
Page speed monitoring
Error logging and alerting
Uptime monitoring

Wiki Page 7: Development Guidelines
Title: Coding Standards & Best Practices

Content:
Follow these guidelines for consistent and maintainable code.

PHP Standards:
Follow PSR-12 coding standards
Use meaningful variable and function names
Add proper documentation comments
Implement error handling for all external calls
Use dependency injection where appropriate

Blade Templates:
Use proper indentation (4 spaces)
Include comments for complex logic
Use component includes for reusable sections
Escape all user output with {{ }}
Use directives for control structures

JavaScript:
Write clean, documented vanilla JS
Use modern ES6+ features when appropriate
Handle errors gracefully
Optimize for performance
Use event delegation for dynamic content

CSS:
Utilize Tailwind utility classes consistently
Create custom components only when necessary
Follow mobile-first responsive design
Optimize for performance and accessibility

Database Design:
Use proper naming conventions
Include appropriate indexes
Implement foreign key relationships
Add proper validation rules
Use migrations for all schema changes

Testing:
Write unit tests for business logic
Test form validation thoroughly
Include error case testing
Test email functionality
Perform browser compatibility testing

Git Workflow:
Use feature branches for new development
Write clear, descriptive commit messages
Include proper documentation updates
Test before merging to main
Use pull requests for code review

4. CHANGELOG
(Keep this file in your root directory)

Changelog
All notable changes to the "Africa Digital Procurement Summit 2026" project will be documented in this file.

The format is based on Keep a Changelog,and this project adheres to Semantic Versioning.

[Unreleased]
Added
Initial project scaffolding with Laravel 13 and Tailwind CSS.
Database migrations for Users, Cache, and Jobs tables.
Master Layout template with Header and Footer.
Route definitions for Home, Delegates, and Agenda.
Basic configuration for Vite and PostCSS.
GitHub repository setup and initial documentation.
Changed
N/A
Deprecated
N/A
Removed
N/A
Fixed
Resolved Tailwind CSS v4 compatibility issues by downgrading to v3.4.
Fixed unknownAtRules CSS errors in VS Code via .vscode/settings.json.
Corrected file structure (moving home.blade.php out of layouts/ folder).
Security
N/A


