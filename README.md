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
- [Key Features](#-key-features)
- [Site Architecture (The 9 Pages)]#-site-architecture-the-9-pages)
- [Tech Stack](#-tech-stack)
- [Prerequisites](#-prerequisites)
- [Installation Guide](#-installation-guide)
- [Project Structure](#-project-structure)
- [Troubleshooting](#-troubleshooting)
- [Deployment](#-deployment)
- [Credits & References](#-credits--references)

---

## 🚀 Project Overview

The DPA Summit website is designed as a strategic intervention to drive procurement transformation. It serves as a central hub for event registration, agenda management, and sponsor visibility, while tightly integrating with the Gloopro ecosystem.

### Business Objectives
*   **Lead Generation:** Capture high-quality leads from C-Suite executives in Oil & Gas, FMCG, and Manufacturing.
*   **Brand Authority:** Establish Gloopro as a leader in ERP-integrated procurement solutions.
*   **Cross-Traffic:** Implement a unique "Dual-Tab" strategy to drive traffic between the Summit site and the Gloopro corporate site.

---

## ✨ Key Features

### 1. Dual-Tab Traffic Strategy
*   **Logic:** When a user visits the DPA Summit website, a JavaScript trigger attempts to open the Gloopro corporate site in a new tab (and vice-versa).
*   **Fallback:** If the browser blocks the automatic popup, a prominent sticky banner is displayed with a manual "Visit Partner Site" button.

### 2. Advanced SEO Optimization
*   **Schema Markup:** Full implementation of **Event Schema** (`@type Event`) to allow Google to display the event date, location, and registration status directly in search results (Rich Snippets).
*   **Performance:** Optimized asset loading using Vite for high Core Web Vitals scores.

### 3. Lead Capture System
*   **Registration Form:** Collects specific enterprise data, including "Current ERP System," to aid lead qualification.
*   **Inquiry Routing:** Contact forms route directly to the event management team via Laravel Mail.

### 4. Design & UX
*   **Responsive Design:** Mobile-first architecture using Tailwind CSS.
*   **Design Cues:** Modeled after high-end event sites like `procurement.events`, `venco.africa`, and `conference.dpw.ai`.

---

## 📂 Site Architecture (The 9 Pages)

The website is structured as a Multi-Page Application (MPA) to maximize SEO.

| # | Page Name | Purpose |
| :--- | :--- | :--- |
| 1 | **Home** | Hero section, Countdown Timer, "Big Idea" problem statement, and CTA. |
| 2 | **Delegates** | Replaces "About Us". Focuses on "Who Should Attend" and "Why Attend" (CFOs, CPOs). |
| 3 | **Program (Agenda)** | Detailed breakdown of Sessions I, II, and III (Governance, Leakage Audit, Automation). |
| 4 | **Speakers** | Grid for speaker profiles (Placeholder/Coming Soon logic). |
| 5 | **Sponsors & Partnerships** | Combined page for Sponsors (Logos) and Partnerships (ProAlly). |
| 6 | **Media** | Press Room for journalists (Press Releases, Media Coverage). |
| 7 | **FAQ** | Answers to common questions (Invitations, Demos, Logistics). |
| 8 | **Contact** | General inquiries form and contact details. |
| 9 | **Register** | The primary conversion page with the detailed lead capture form. |

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

4.  **Important:** Ensure your `php.ini` has `extension=pdo_mysql` uncommented.

### 5. Database Setup

1.  Create a database named `dpa_summit_db` in your MySQL tool (phpMyAdmin/Workbench).
2.  Run the migrations:
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

---

## 🛠 Troubleshooting

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

## 🚢 Deployment

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