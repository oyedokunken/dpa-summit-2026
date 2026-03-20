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


