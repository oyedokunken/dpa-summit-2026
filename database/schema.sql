-- DPA Summit 2026 Database Schema
-- MySQL/XAMPP Database Schema
-- Run this script in your XAMPP phpMyAdmin to create the database structure

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `dpa_summit_db` 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- Use the database
USE `dpa_summit_db`;

-- Registrations table for event attendees
CREATE TABLE `registrations` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `job_title` varchar(150) NOT NULL,
    `company` varchar(200) NOT NULL,
    `company_size` enum('1-50','51-200','201-500','501-1000','1000+') NOT NULL,
    `industry` varchar(100) NOT NULL,
    `current_erp` varchar(100) DEFAULT NULL,
    `procurement_challenges` json NOT NULL,
    `interest_areas` json NOT NULL,
    `dietary_requirements` text DEFAULT NULL,
    `special_needs` text DEFAULT NULL,
    `marketing_consent` tinyint(1) NOT NULL DEFAULT 0,
    `terms_accepted` tinyint(1) NOT NULL DEFAULT 0,
    `registration_status` enum('pending','confirmed','cancelled','waitlisted') NOT NULL DEFAULT 'pending',
    `registration_source` varchar(50) DEFAULT 'website',
    `ip_address` varchar(45) DEFAULT NULL,
    `user_agent` text DEFAULT NULL,
    `email_sent` tinyint(1) NOT NULL DEFAULT 0,
    `email_sent_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `registrations_email_unique` (`email`),
    KEY `registrations_company_index` (`company`),
    KEY `registrations_status_index` (`registration_status`),
    KEY `registrations_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Contacts table for general inquiries
CREATE TABLE `contacts` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(20) DEFAULT NULL,
    `company` varchar(200) DEFAULT NULL,
    `subject` varchar(200) NOT NULL,
    `message` text NOT NULL,
    `contact_preference` enum('email','phone','both') NOT NULL DEFAULT 'email',
    `contact_status` enum('new','in_progress','resolved','closed') NOT NULL DEFAULT 'new',
    `assigned_to` varchar(100) DEFAULT NULL,
    `priority` enum('low','medium','high','urgent') NOT NULL DEFAULT 'medium',
    `ip_address` varchar(45) DEFAULT NULL,
    `user_agent` text DEFAULT NULL,
    `email_sent` tinyint(1) NOT NULL DEFAULT 0,
    `email_sent_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (`id`),
    KEY `contacts_email_index` (`email`),
    KEY `contacts_status_index` (`contact_status`),
    KEY `contacts_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Partnerships table for sponsorship and partnership inquiries
CREATE TABLE `partnerships` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(255) NOT NULL,
    `company` varchar(200) NOT NULL,
    `job_title` varchar(150) NOT NULL,
    `partnership_type` enum('sponsorship','exhibitor','media_partner','other') NOT NULL,
    `company_website` varchar(255) DEFAULT NULL,
    `message` text NOT NULL,
    `budget_range` varchar(100) DEFAULT NULL,
    `partnership_status` enum('new','contacted','negotiating','confirmed','rejected') NOT NULL DEFAULT 'new',
    `assigned_to` varchar(100) DEFAULT NULL,
    `priority` enum('low','medium','high','urgent') NOT NULL DEFAULT 'medium',
    `follow_up_date` date DEFAULT NULL,
    `notes` text DEFAULT NULL,
    `ip_address` varchar(45) DEFAULT NULL,
    `user_agent` text DEFAULT NULL,
    `email_sent` tinyint(1) NOT NULL DEFAULT 0,
    `email_sent_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (`id`),
    KEY `partnerships_email_index` (`email`),
    KEY `partnerships_company_index` (`company`),
    KEY `partnerships_type_index` (`partnership_type`),
    KEY `partnerships_status_index` (`partnership_status`),
    KEY `partnerships_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Email logs table for tracking all email communications
CREATE TABLE `email_logs` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `recipient_email` varchar(255) NOT NULL,
    `recipient_name` varchar(100) DEFAULT NULL,
    `email_type` enum('registration_confirmation','contact_notification','contact_confirmation','partnership_inquiry','admin_notification') NOT NULL,
    `subject` varchar(255) NOT NULL,
    `template_used` varchar(100) DEFAULT NULL,
    `status` enum('sent','failed','bounced','opened','clicked') NOT NULL DEFAULT 'sent',
    `error_message` text DEFAULT NULL,
    `sent_via` enum('phpmailer','laravel_mail','smtp_api') NOT NULL DEFAULT 'phpmailer',
    `related_entity_type` enum('registration','contact','partnership') DEFAULT NULL,
    `related_entity_id` bigint(20) unsigned DEFAULT NULL,
    `opened_at` timestamp NULL DEFAULT NULL,
    `clicked_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    KEY `email_logs_recipient_index` (`recipient_email`),
    KEY `email_logs_type_index` (`email_type`),
    KEY `email_logs_status_index` (`status`),
    KEY `email_logs_related_entity_index` (`related_entity_type`,`related_entity_id`),
    KEY `email_logs_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Settings table for dynamic configuration
CREATE TABLE `settings` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `key` varchar(100) NOT NULL,
    `value` text DEFAULT NULL,
    `description` text DEFAULT NULL,
    `type` enum('string','boolean','integer','json') NOT NULL DEFAULT 'string',
    `is_public` tinyint(1) NOT NULL DEFAULT 0,
    `created_at` timestamp NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default settings
INSERT INTO `settings` (`key`, `value`, `description`, `type`, `is_public`) VALUES
('event_name', 'Africa Digital Procurement Summit 2026', 'Event name displayed throughout the site', 'string', 1),
('event_date', '2026-05-26', 'Event date', 'string', 1),
('event_location', 'Eko Hotels and Suites, Victoria Island, Lagos', 'Event location', 'string', 1),
('registration_open', '1', 'Whether registration is currently open', 'boolean', 1),
('max_attendees', '500', 'Maximum number of attendees', 'integer', 0),
('contact_email', 'info@dpa-summit.com', 'Contact email address', 'string', 1),
('phone_number', '+234-XXX-XXXX', 'Contact phone number', 'string', 1),
('social_facebook', 'https://facebook.com/dpasummit2026', 'Facebook page URL', 'string', 1),
('social_twitter', 'https://twitter.com/dpasummit2026', 'Twitter profile URL', 'string', 1),
('social_linkedin', 'https://linkedin.com/company/dpa-summit-2026', 'LinkedIn company page URL', 'string', 1);

-- Analytics table for tracking form submissions and user behavior
CREATE TABLE `analytics` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `event_type` enum('page_view','form_view','form_submission','email_sent','registration_completed') NOT NULL,
    `entity_type` varchar(50) DEFAULT NULL,
    `entity_id` bigint(20) unsigned DEFAULT NULL,
    `url` varchar(500) DEFAULT NULL,
    `referrer` varchar(500) DEFAULT NULL,
    `user_agent` text DEFAULT NULL,
    `ip_address` varchar(45) DEFAULT NULL,
    `session_id` varchar(100) DEFAULT NULL,
    `additional_data` json DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    KEY `analytics_event_type_index` (`event_type`),
    KEY `analytics_entity_index` (`entity_type`,`entity_id`),
    KEY `analytics_created_at_index` (`created_at`),
    KEY `analytics_session_id_index` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Add foreign key constraints
ALTER TABLE `email_logs` 
ADD CONSTRAINT `email_logs_related_entity_foreign` 
FOREIGN KEY (`related_entity_id`) 
REFERENCES `registrations` (`id`) 
ON DELETE SET NULL ON UPDATE CASCADE;

-- Create views for reporting
CREATE VIEW `registration_summary` AS
SELECT 
    COUNT(*) as total_registrations,
    COUNT(CASE WHEN registration_status = 'confirmed' THEN 1 END) as confirmed_registrations,
    COUNT(CASE WHEN registration_status = 'pending' THEN 1 END) as pending_registrations,
    COUNT(CASE WHEN DATE(created_at) = CURDATE() THEN 1 END) as today_registrations,
    COUNT(CASE WHEN company_size = '1000+' THEN 1 END) as enterprise_registrations,
    COUNT(DISTINCT company) as unique_companies
FROM registrations;

CREATE VIEW `contact_summary` AS
SELECT 
    COUNT(*) as total_contacts,
    COUNT(CASE WHEN contact_status = 'new' THEN 1 END) as new_contacts,
    COUNT(CASE WHEN contact_status = 'resolved' THEN 1 END) as resolved_contacts,
    COUNT(CASE WHEN DATE(created_at) = CURDATE() THEN 1 END) as today_contacts,
    COUNT(CASE WHEN priority = 'high' OR priority = 'urgent' THEN 1 END) as high_priority_contacts
FROM contacts;

CREATE VIEW `partnership_summary` AS
SELECT 
    COUNT(*) as total_partnerships,
    COUNT(CASE WHEN partnership_type = 'sponsorship' THEN 1 END) as sponsorship_inquiries,
    COUNT(CASE WHEN partnership_type = 'exhibitor' THEN 1 END) as exhibitor_inquiries,
    COUNT(CASE WHEN partnership_status = 'confirmed' THEN 1 END) as confirmed_partnerships,
    COUNT(CASE WHEN DATE(created_at) = CURDATE() THEN 1 END) as today_inquiries
FROM partnerships;

-- Create stored procedures for common operations
DELIMITER //

-- Procedure to get registration statistics
CREATE PROCEDURE `GetRegistrationStats`()
BEGIN
    SELECT 
        COUNT(*) as total_registrations,
        COUNT(CASE WHEN registration_status = 'confirmed' THEN 1 END) as confirmed_registrations,
        COUNT(CASE WHEN DATE(created_at) = CURDATE() THEN 1 END) as today_registrations,
        COUNT(DISTINCT company) as unique_companies,
        JSON_ARRAYAGG(company_size) as company_sizes,
        JSON_ARRAYAGG(industry) as industries
    FROM registrations;
END//

-- Procedure to mark registration as confirmed
CREATE PROCEDURE `ConfirmRegistration`(IN registration_id BIGINT)
BEGIN
    UPDATE registrations 
    SET registration_status = 'confirmed', 
        updated_at = CURRENT_TIMESTAMP 
    WHERE id = registration_id;
    
    -- Log the confirmation
    INSERT INTO analytics (event_type, entity_type, entity_id, additional_data)
    VALUES ('registration_completed', 'registration', registration_id, JSON_OBJECT('status', 'confirmed'));
END//

DELIMITER ;

-- Create triggers for automatic logging
DELIMITER //

-- Trigger to log new registrations
CREATE TRIGGER `log_new_registration` 
AFTER INSERT ON `registrations`
FOR EACH ROW
BEGIN
    INSERT INTO analytics (event_type, entity_type, entity_id, url, ip_address, user_agent, additional_data)
    VALUES ('form_submission', 'registration', NEW.id, '/register', NEW.ip_address, NEW.user_agent, 
            JSON_OBJECT('email', NEW.email, 'company', NEW.company));
END//

-- Trigger to log new contacts
CREATE TRIGGER `log_new_contact` 
AFTER INSERT ON `contacts`
FOR EACH ROW
BEGIN
    INSERT INTO analytics (event_type, entity_type, entity_id, url, ip_address, user_agent, additional_data)
    VALUES ('form_submission', 'contact', NEW.id, '/contact', NEW.ip_address, NEW.user_agent, 
            JSON_OBJECT('email', NEW.email, 'subject', NEW.subject));
END//

DELIMITER ;

-- Output completion message
SELECT 'Database schema created successfully!' as status;
SELECT 'Tables created: registrations, contacts, partnerships, email_logs, settings, analytics' as tables_created;
SELECT 'Views created: registration_summary, contact_summary, partnership_summary' as views_created;
SELECT 'Procedures created: GetRegistrationStats, ConfirmRegistration' as procedures_created;
SELECT 'Triggers created: log_new_registration, log_new_contact' as triggers_created;
