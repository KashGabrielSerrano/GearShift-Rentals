# GearShift Rentals 

A responsive single-page web application for a luxury and performance vehicle rental platform. Built as a static front-end interface using **Bootstrap 5** with **PHP** and **MySQL** database integration for handling dynamic reservation inquiries.

---

## Overview

**GearShift Rentals** allows users to explore exotic supercars, luxury SUVs, and electric hyper-sedans, review tailored rental services, and submit booking inquiries. Clicking "Rent This Vehicle" on any fleet card automatically smooth-scrolls to the contact section and pre-selects the vehicle in the reservation form.

---

## Key Features

- **Responsive Navigation Bar (`navbar.php`):** Sticky top bar with smooth-scrolling links to all page sections.
- **Hero Banner (`home-banner.php`):** High-impact introductory section with key brand statistics and VIP guarantee features.
- **Services Showcase (`services.php`):** Grid layout detailing rental services (Chauffeur, Overland Rigs, Corporate Leases, Airport Pickups).
- **Fleet Showcase (`cars.php`):** High-contrast product cards with vehicle specs, pricing, and interactive reservation buttons.
- **Developer Profile (`about.php`):** About section highlighting developer credentials, technical stack, and vision.
- **Database-Connected Contact Form (`contact-us.php`):** Server-side form handling that sanitizes input and safely records inquiries into a MySQL database via prepared statements.

---

## Tech Stack
- **Front-End:** HTML5, CSS3, Bootstrap 5.3, Bootstrap Icons, JavaScript (ES6)
- **Back-End:** PHP 8+ (MySQLi / Procedural)
- **Database:** MySQL / MariaDB (phpMyAdmin)
- **Design:** Dark Glassmorphism, High-Contrast Typography (Outfit & Inter Google Fonts)

---

## Database Setup Instructions

1. **Start Services:** Open your **XAMPP / WAMP Control Panel** and start both **Apache** and **MySQL**.
2. **Open phpMyAdmin:** Navigate to [localhost/phpmyadmin](http://localhost/phpmyadmin/) in your web browser.
3. **Execute SQL Script:** Click on the **SQL** tab and run the following query to create the database and table:

```sql
CREATE DATABASE IF NOT EXISTS gearshift_db;
USE gearshift_db;

CREATE TABLE IF NOT EXISTS contact_inquiries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  vehicle_interest VARCHAR(100) NOT NULL,
  pickup_date DATE NOT NULL,
  dropoff_date DATE NOT NULL,
  message TEXT NULL,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
4. Add Project Files: Clone or copy this repository into your local server's web root directory (e.g., C:/xampp/htdocs/GearShift-Rentals/).
5. **Run the Application:** Open your browser and navigate to [localhost/GearShift-Rentals](http://localhost/GearShift-Rentals/index.php).
