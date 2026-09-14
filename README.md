#Vehicle Service Booking System 
# Car Rental Booking System

DBMS Mini Project

A database-driven web application developed using PHP and MySQL for managing vehicle rentals and customer bookings.

---

## Student Information

* **Name:** Sujal Dilip Badge
* **Roll No:** MLU24F164
* **Division:** C
* **Statement No-18
* **Repository:** sujalbadge22-lab/Car-Rental-Booking-System

---

## Problem Statement

The Car Rental Booking System allows users to view available vehicles and submit rental booking requests. The system stores booking information in a MySQL database and provides an interface to view and track all reservation records.

---

## Objectives

* Submit car rental booking requests
* Store booking information in MySQL
* View submitted bookings
* Demonstrate PHP and MySQL integration
* Use secure data handling practices

---

## Features

* Vehicle selection and booking submission
* Pick-up and drop-off date selection
* Customer contact details recording
* Real-time record display panel
* Client-side validation
* Server-side validation

---

## Technologies Used

* HTML5
* CSS3
* PHP
* MySQL
* XAMPP (Local Development Server)

---

## Database

**Main table:** `bookings`

**Fields include:**
* `booking_id`
* `customer_name`
* `email`
* `phone`
* `car_model`
* `booking_date`
* `status`

---

## Security

* Server-side validation is performed before database operations.
* Database values displayed on the website are escaped using `htmlspecialchars()`.
* Sensitive database credentials are kept secure and configured via local environment files (`config.php`).

---

## Application Flow

User
 ↓
HTML Form
 ↓
PHP Validation
 ↓
SQL Execution
 ↓
MySQL Database
 ↓
View Booking Records

## Hosted Website / Repository

* **GitHub Repository:** [https://github.com/sujalbadge22-lab/Car-Rental-Booking-System](https://github.com/sujalbadge22-lab/Car-Rental-Booking-System)
* **Live Demo (Tunnel):** [https://wide-comics-glow.loca.lt/car_rental/index.php](https://wide-comics-glow.loca.lt/car_rental/index.php)

Project Structure
Plaintext
car_rental/
├── config.php      # Database connection configuration
├── index.php       # Main booking interface
├── save.php        # Form processing logic
├── view.php        # Booking records view panel
├── style.css       # Application styling
├── database.sql    # Database schema file
└── README.md       # Project documentation

