# 🌍 Africa Digital Procurement Summit 2026 (DPA 2026)

[![Laravel](https://img.shields.io/badge/Laravel-13.1-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.4-38B2AC?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php)](https://www.php.net)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)

> **Accelerating Procurement Transformation for Large Enterprises in the Digital Era**

The official digital platform for the **Africa Digital Procurement Summit 2026**. A high-level executive forum convening industry leaders, CFOs, and CPOs to explore how digital transformation is reshaping procurement across Africa’s largest enterprises.

**Event Date:** May 26, 2026  
**Location:** Eko Hotels and Suites, Victoria Island, Lagos  
**Organizer:** Gloopro Procurement Systems

---

## 📋 Table of Contents

- [Project Overview](#-project-overview)
- [Business Objectives](#-business-objectives)
- [Key Features](#-key-features)
- [Site Architecture (The 9 Pages)](#-site-architecture-the-9-pages)
- [Current Implementation Status](#-current-implementation-status)
- [Tech Stack](#-tech-stack)
- [Prerequisites](#-prerequisites)
- [Installation Guide](#-installation-guide)
- [Project Structure](#-project-structure)
- [Development Workflow](#-development-workflow)
- [Testing](#-testing)
- [Troubleshooting](#-troubleshooting)
- [Deployment](#-deployment)
- [Contributing](#-contributing)
- [Credits & References](#-credits--references)

---

## 🚀 Project Overview

The DPA Summit website is designed as a strategic intervention to drive procurement transformation. It serves as a central hub for event registration, agenda management, and sponsor visibility, while tightly integrating with the Gloopro ecosystem.

### Business Objectives

- **Lead Generation:** Capture high-quality leads from C-Suite executives in Oil & Gas, FMCG, and Manufacturing sectors
- **Brand Authority:** Establish Gloopro as a leader in ERP-integrated procurement solutions
- **Cross-Traffic:** Implement a unique "Dual-Tab" strategy to drive traffic between the Summit site and the Gloopro corporate site
- **Event Management:** Streamline registration, speaker management, and sponsor coordination
- **Content Marketing:** Provide valuable procurement insights and thought leadership content

---

## 🎯 Current Implementation Status

### ✅ Completed Features
- **Laravel 13.1** framework setup with PHP 8.3
- **Tailwind CSS 3.4** configuration with Vite build system
- **Basic routing** for Home, Delegates, and Agenda pages
- **Master layout template** with responsive header/footer
- **Database migrations** for users, cache, and jobs tables
- **Development environment** configuration (Vite HMR, Laravel serve)
- **Comprehensive SEO foundation** with Open Graph, Schema.org markup, sitemap.xml, robots.txt
- **Enhanced .htaccess** with security headers, compression, and performance optimization
- **PHPMailer integration** for email functionality (registrations, contact forms, inquiries)
- **Email service architecture** with professional HTML templates
- **Form controllers** with validation and error handling
- **Documentation** (README, WIKI, CHANGELOG, DEPLOY.md)

### 🚧 In Progress
- **Home page** with hero section and basic styling
- **Delegates page** placeholder
- **Agenda page** placeholder
- **Email configuration** setup for production SMTP settings

### 📋 Pending Implementation
- **Registration form** frontend with lead capture functionality
- **Contact form** frontend with email integration
- **Speaker profiles** page with dynamic content
- **Sponsors & Partnerships** page
- **Media/Press** page
- **FAQ** page
- **Dual-Tab traffic strategy** implementation
- **SEO optimization** integration with Blade templates
- **Countdown timer** to event date
- **Mobile responsiveness** optimization
- **Database models** for registrants and contacts
- **Email testing** and production deployment

---

## ✨ Key Features

### 1. Dual-Tab Traffic Strategy
*   **Logic:** When a user visits the DPA Summit website, a JavaScript trigger attempts to open the Gloopro corporate site in a new tab (and vice-versa).
*   **Fallback:** If the browser blocks the automatic popup, a prominent sticky banner is displayed with a manual "Visit Partner Site" button.

### 2. Advanced SEO Optimization
- **Schema Markup:** Full implementation of **Event Schema** (`@type Event`) to allow Google to display the event date, location, and registration status directly in search results (Rich Snippets).
- **Performance:** Optimized asset loading using Vite for high Core Web Vitals scores.
- **Open Graph Tags:** Comprehensive social media sharing optimization for Facebook, Twitter, LinkedIn.
- **XML Sitemap:** Dynamic sitemap with all pages and priority rankings.
- **Robots.txt:** Search engine crawling directives with bot management.
- **Security Headers:** HSTS, CSP, XSS protection, and other security optimizations.
- **Meta Tags:** Dynamic title, description, and keyword management per page.

### 3. Lead Capture System
- **Registration Form:** Collects specific enterprise data, including "Current ERP System," to aid lead qualification.
- **Inquiry Routing:** Contact forms route directly to the event management team via PHPMailer.
- **Email Templates:** Professional HTML email templates for registrations, confirmations, and notifications.
- **Form Validation:** Comprehensive server-side validation with error handling.
- **Admin Notifications:** Automatic email alerts for new registrations and inquiries.
- **Email Configuration:** Full SMTP setup with Gmail integration and custom addresses.

### 4. Design & UX
*   **Responsive Design:** Mobile-first architecture using Tailwind CSS.
*   **Design Cues:** Modeled after high-end event sites like `procurement.events`, `venco.africa`, and `conference.dpw.ai`.

---

## 📂 Site Architecture (The 9 Pages)

The website is structured as a Multi-Page Application (MPA) to maximize SEO.

| # | Page Name | URL | Purpose |
| :--- | :--- | :--- | :--- |
| 1 | **Home** | `/` | Hero section, problem statement, key focus areas, and CTAs. |
| 2 | **Delegates** | `/delegates` | Target audience (CPOs, CFOs), why attend benefits, strategic outcomes. |
| 3 | **Program (Agenda)** | `/agenda` | Three critical sessions: Digital Governance, Leakage Audit, Automation. |
| 4 | **Speakers** | `/speakers` | Speaker categories and lineup (coming soon placeholder). |
| 5 | **Sponsors & Partnerships** | `/sponsors` | Partnership opportunities, pricing tiers, and benefits. |
| 6 | **Media** | `/media` | Press room, press releases, media resources, and contacts. |
| 7 | **FAQ** | `/faq` | Comprehensive answers to registration, logistics, and technical questions. |
| 8 | **Contact** | `/contact` | Contact forms, inquiry types, and response time information. |
| 9 | **Register** | `/register` | Detailed registration form with lead capture and qualification. |

### **Page Features:**
- ✅ **SEO Optimized** - Each page has unique meta tags, titles, and descriptions
- ✅ **Mobile Responsive** - Tailwind CSS responsive design
- ✅ **Brand Consistent** - Green, red, and white color scheme throughout
- ✅ **Form Integration** - Registration and contact forms with email notifications
- ✅ **Navigation** - Header with all pages, footer with quick links
- ✅ **Professional Content** - Enterprise-focused copy and CTAs

---

## 🛠 Tech Stack

| Component | Technology | Version | Purpose |
| :--- | :--- | :--- | :--- |
| **Backend** | Laravel (PHP Framework) | 13.1 | MVC Structure, Routing, Migrations |
| **Language** | PHP | 8.3 | Server-side Logic |
| **Frontend** | HTML5, Blade | - | Templating Engine |
| **Styling** | Tailwind CSS | 3.4 | Utility-first CSS Framework |
| **Build Tool** | Vite | 8.0 | Asset Compilation & HMR |
| **Database** | MySQL | 8.0+ | Data Storage (Leads, Inquiries) |
| **JS Runtime** | Node.js | 20+ | Package Management |

---

## 📦 Prerequisites

Before you begin, ensure you have the following installed on your local machine:

*   **PHP** >= 8.3 (Ensure `pdo_mysql` extension is enabled in `php.ini`)
*   **Composer** >= 2.0
*   **Node.js** >= 20.0
*   **NPM** >= 9.0
*   **MySQL** >= 8.0
*   **Git**

---

## 🛠 Installation Guide

Follow these steps to set up the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/oyedokunken/dpa-summit-2026.git
cd dpa-summit-2026
```

### 2. Install Backend Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

**Note:** We use Tailwind CSS v3.4 for stability.

```bash
npm install
npm install -D tailwindcss@^3.4.0 postcss autoprefixer
npx tailwindcss init -p
```

*If `npx` fails, manually create `tailwind.config.js` and `postcss.config.js` in the root directory.*

### 4. Environment Setup

1.  Copy the example environment file:
    ```bash
    cp .env.example .env
    ```

2.  Generate the application key:
    ```bash
    php artisan key:generate
    ```

3.  Edit `.env` and configure your database settings:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=dpa_summit_db
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

4.  **Configure Email Settings:**
    ```env
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=your-email@gmail.com
    MAIL_PASSWORD=your-app-password
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=noreply@dpa-summit.com
    MAIL_FROM_NAME="DPA Summit 2026"
    MAIL_ADMIN_ADDRESS=admin@dpa-summit.com
    MAIL_INQUIRIES_ADDRESS=partnerships@dpa-summit.com
    ```

5.  **Important:** Ensure your `php.ini` has `extension=pdo_mysql` uncommented.

### 5. Database Setup

1.  Create a database named `dpa_summit_db` in your MySQL tool (phpMyAdmin/Workbench).
2.  **Import Database Schema:**
    ```bash
    # Import the complete schema with tables, views, and procedures
    mysql -u root -p dpa_summit_db < database/schema.sql
    ```
3.  Run the migrations:
    ```bash
    php artisan migrate
    ```

### 6. Run Development Servers

You need **two** separate terminal windows to run the application effectively.

**Terminal 1 (Vite Asset Compiler):**
```bash
npm run dev
```
*This handles CSS/JS compiling. You should see `VITE ready in X ms`.*

**Terminal 2 (Laravel PHP Server):**
```bash
php artisan serve
```
*This handles the backend. You should see `Server running on [http://127.0.0.1:8000]`.*

Visit `http://127.0.0.1:8000` in your browser.

---

## 📂 Project Structure

```text
dpa-summit-2026/
├── app/
│   ├── Http/Controllers/     # Application Logic (Form handling)
│   └── Models/              # Database Models (Registrant, Contact)
├── bootstrap/               # Bootstrap files
├── config/                  # Laravel configuration files
├── database/
│   ├── migrations/          # Database schema definitions
│   └── seeders/             # Dummy data generation
├── public/                  # Public entry point
│   └── assets/              # Compiled assets (images, css, js)
├── resources/
│   ├── css/
│   │   └── app.css          # Main Tailwind entry point
│   ├── js/
│   │   └── app.js           # Custom JS (Dual-tab logic, Countdown)
│   └── views/
│       ├── layouts/         # Reusable templates (master.blade.php)
│       ├── home.blade.php   # Home page content
│       ├── delegates.blade.php
│       └── ...              # Other 7 pages
├── routes/
│   ├── web.php              # Web routes (URL definitions)
│   └── api.php              # API routes (if needed)
├── storage/                 # App storage (logs, cache, sessions)
├── tests/                   # Automated tests
├── .env                     # Environment variables (Secrets - Do not commit)
├── .gitignore               # Git ignore rules
├── composer.json            # PHP dependencies
├── package.json             # JS dependencies
├── tailwind.config.js       # Tailwind configuration
└── vite.config.js           # Vite configuration
```

## 🔄 Development Workflow

### Git Workflow
```bash
# Create feature branch
git checkout -b feature/registration-form

# Make changes and commit
git add .
git commit -m "feat: add registration form with validation"

# Push and create PR
git push origin feature/registration-form
```

### Code Style
- **PHP:** Follow PSR-12 standards
- **Blade:** Use proper indentation and comments
- **CSS:** Utilize Tailwind utility classes consistently
- **JS:** Write clean, documented vanilla JavaScript

### Testing Strategy
```bash
# Run Laravel tests
php artisan test

# Run specific test
php artisan test --filter RegistrationTest

# Generate test coverage report
php artisan test --coverage
```

---

## 🧪 Testing

### Available Tests
- **Unit Tests:** Model validations and business logic
- **Feature Tests:** Form submissions and user flows
- **Browser Tests:** UI interactions with Laravel Dusk

### Running Tests
```bash
# Install testing dependencies
composer require --dev laravel/dusk

# Run all tests
php artisan test

# Run with coverage
php artisan test --coverage --min=80
```

---

### 1. "View [home] not found"
*   **Cause:** The `.blade.php` file is in the wrong folder.
*   **Fix:** Ensure `home.blade.php` is in `resources/views/`, NOT in `resources/views/layouts/`.

### 2. "Route [home] not defined"
*   **Cause:** You used `{{ route('home') }}` in your template but didn't name the route in `web.php`.
*   **Fix:** In `routes/web.php`, add `->name('home')` to the route definition.
    ```php
    Route::get('/', function () {
        return view('home');
    })->name('home');
    ```

### 3. "Unknown at rule @tailwind" (VS Code Error)
*   **Cause:** VS Code's built-in CSS linter is confused by Tailwind directives.
*   **Fix:** Create a `.vscode/settings.json` file and add:
    ```json
    {
      "css.validate": false
    }
    ```

### 4. "could not find driver (Connection: sqlite)"
*   **Cause:** PHP is missing the MySQL driver or `.env` is pointing to the wrong database.
*   **Fix:** Enable `extension=pdo_mysql` in `php.ini` and ensure `.env` has `DB_CONNECTION=mysql`.

---

## 🤝 Contributing

We welcome contributions! Please follow these guidelines:

### Development Setup
1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Make your changes
4. Run tests: `php artisan test`
5. Commit changes: `git commit -m 'Add amazing feature'`
6. Push to branch: `git push origin feature/amazing-feature`
7. Open a Pull Request

### Code Review Process
- All code must pass automated tests
- Maintain PSR-12 coding standards
- Update documentation for new features
- Ensure responsive design across devices

### Issue Reporting
- Use GitHub Issues for bug reports
- Include steps to reproduce
- Provide environment details
- Attach screenshots when applicable

---

## 🛠 Troubleshooting

This project is designed for in-house deployment by the Gloopro tech team.

1.  **Pull Code:** `git pull origin main`
2.  **Install Dependencies:** `composer install --optimize-autoloader --no-dev`
3.  **Build Assets:** `npm install && npm run build`
4.  **Optimize:** `php artisan config:cache && php artisan route:cache && php artisan view:cache`
5.  **Migrate:** `php artisan migrate --force`

*Note: Ensure `APP_DEBUG=false` and `APP_ENV=production` in the production `.env` file.*

---

## 🏆 Credits & References

*   **Developer:** Kehinde Oyedokun
*   **Organizer:** Gloopro Procurement Systems
*   **Design Inspiration:**
    *   [Procurement Events](https://procurement.events/)
    *   [Venco Africa](https://venco.africa/)
    *   [Digital Procurement World (DPW)](https://conference.dpw.ai/)

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.