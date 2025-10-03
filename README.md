Cosmos Automation Limited - Engineering Solutions Website
https://Images/Images/cosmos-logo.png

🌟 Overview
Cosmos Automation Limited is a comprehensive engineering solutions company specializing in renewable energy, automation systems, IoT solutions, and embedded systems. This website serves as the digital presence for the company, showcasing their services, projects, and facilitating client consultations.

🚀 Features
Core Functionality
Responsive Design - Optimized for all devices

Service Showcase - Highlighting renewable energy, IoT, and automation solutions

Project Portfolio - Display of recent installations and case studies

Client Consultation System - Integrated booking and contact forms

Newsletter Subscription - Email marketing integration

Testimonial Carousel - Client feedback display

Technical Features
PHP-based form processing with MySQL database integration

AJAX form submissions for better user experience

Email notification system using PHPMailer

Image slider with auto-play functionality

Mobile-responsive navigation

WhatsApp integration for direct communication

🛠️ Technology Stack
Frontend
HTML5 - Semantic markup

CSS3 - Custom styling with responsive design

JavaScript - Interactive functionality

Font Awesome - Icons and UI elements

Google Fonts - Typography (Sora, Work Sans)

Owl Carousel - Testimonial slider

Backend
PHP 8.2 - Server-side processing

MySQL - Database management

Apache - Web server

PHPMailer - Email functionality

Deployment
Docker - Containerization

Render - Cloud hosting platform

📁 Project Structure
text
cosmos2/
├── consultation_project/
│   └── includes/
│       ├── process_consultation.php
│       ├── newsletter.php
│       ├── dbh.inc.php
│       └── send_email.php
├── Images/
│   └── Images/
│       ├── cosmos-logo.png
│       ├── RFID.jpg
│       ├── pmd1.jpg
│       └── ... (other images)
├── font-awesome-4.7.0/
│   └── css/ (Font Awesome stylesheets)
├── index.php
├── about.php
├── service.php
├── project.php
├── contact.php
├── style.css
├── script.js
├── Dockerfile
└── composer.json
🎯 Key Pages
1. Homepage (index.php)
Hero section with sliding banner

Service overview grid

Recent projects showcase

Testimonial carousel

Consultation booking form

Newsletter subscription

2. Services (service.php)
Detailed service descriptions

Renewable energy solutions

IoT and embedded systems

Automation services

3. Projects (project.php)
Project case studies

Installation galleries

Client success stories

4. About Us (about.php)
Company overview

Mission and vision

Team information

5. Contact (contact.php)
Contact information

Inquiry form

Location details

🗄️ Database Schema
Consultations Table
sql
CREATE TABLE consultations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Newsletter Table
sql
CREATE TABLE newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Client Enquiries Table
sql
CREATE TABLE client_enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255),
    phone_no VARCHAR(50),
    email VARCHAR(255),
    location VARCHAR(255),
    hear_about_us VARCHAR(255),
    service VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
⚙️ Installation & Setup
Prerequisites
PHP 8.2+

MySQL 5.7+

Apache Web Server

Composer

Local Development
Clone the repository

bash
git clone https://github.com/nwafor-princewill/cosmos2.git
cd cosmos2
Install dependencies

bash
composer install
Database setup

Create a MySQL database

Import the database schema

Update database credentials in dbh.inc.php

Configure environment

Update email settings in send_email.php

Configure PHPMailer settings

Run the application

bash
php -S localhost:8000
Docker Deployment
bash
# Build the Docker image
docker build -t cosmos-automation .

# Run the container
docker run -p 8081:8081 cosmos-automation
📧 Email Configuration
The system uses PHPMailer for sending:

Consultation confirmations

Newsletter notifications

Client enquiry responses

Update SMTP settings in send_email.php:

php
$mail->isSMTP();
$mail->Host = 'your-smtp-host';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@domain.com';
$mail->Password = 'your-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
🎨 Customization
Styling
Main stylesheet: style.css

Color scheme and branding can be modified in CSS variables

Font families: Sora (headings), Work Sans (body)

Content
Update company information in respective PHP files

Replace placeholder images in Images/ directory

Modify service descriptions and project details

🔧 Form Processing
Consultation Form
Processes through process_consultation.php

Validates email and required fields

Stores data in MySQL database

Sends email notifications

Newsletter Subscription
AJAX-based submission

Email validation and duplication check

Immediate user feedback

📱 Responsive Design
The website is fully responsive with breakpoints for:

Mobile devices (< 768px)

Tablets (768px - 1024px)

Desktop (> 1024px)

🔒 Security Features
Input sanitization and validation

SQL injection prevention using prepared statements

XSS protection with htmlspecialchars()

Session management for user data

🚀 Deployment
Render.com (Current)
Docker-based deployment

Environment variable configuration

Automatic builds from GitHub

Alternative Deployment
Upload files to web server

Configure database connection

Set up cron jobs for maintenance (if needed)

Configure SSL certificate

📞 Integration
WhatsApp Integration
Floating WhatsApp button

Pre-filled message templates

Direct customer support channel

Social Media
Facebook, Twitter, WhatsApp links

Social sharing capabilities

🐛 Troubleshooting
Common Issues
Email not sending

Check SMTP configuration

Verify PHP mail function is enabled

Check spam folder

Database connection errors

Verify database credentials

Check MySQL server status

Ensure proper database permissions

Form submission issues

Check JavaScript console for errors

Verify PHP error logs

Ensure required fields are filled

📄 License
This project is proprietary software belonging to Cosmos Automation Limited.

👥 Contributors
Nwafor Princewill - GitHub

📞 Support
For technical support or inquiries:

Email: info@cosmosautomation.com.ng

Email: nwaforprincewill21@gmail.com

Phone: +234 814 069 9847

WhatsApp: +234 903 265 0856

Cosmos Automation Limited - Providing Comfort Through Technology

