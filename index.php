<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h2>CarRental Pro</h2>
        <nav>
            <a href="index.php">Book Car</a>
            <a href="view.php">View Bookings</a>
        </nav>
    </div>

    <!-- Main Booking Form -->
    <div class="form-container">
        <h2>Book a Vehicle</h2>
        <form action="save.php" method="POST">
            <div class="form-group">
                <label>Customer Full Name:</label>
                <input type="text" name="customer_name" placeholder="e.g. Rahul Sharma" required>
            </div>
            <div class="form-group">
                <label>Email Address:</label>
                <input type="email" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" name="phone" placeholder="9876543210" required>
            </div>
            <div class="form-group">
                <label>Select Vehicle Model:</label>
                <select name="car_model" required>
                    <option value="">-- Choose Car --</option>
                    <option value="Hatchback (Swift)">Hatchback (Swift)</option>
                    <option value="Sedan (Honda City)">Sedan (Honda City)</option>
                    <option value="SUV (Mahindra Thar)">SUV (Mahindra Thar)</option>
                    <option value="Luxury (BMW 3 Series)">Luxury (BMW 3 Series)</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pickup Date:</label>
                <input type="date" name="pickup_date" required>
            </div>
            <div class="form-group">
                <label>Return Date:</label>
                <input type="date" name="return_date" required>
            </div>
            <button type="submit" class="submit-btn">Confirm Reservation</button>
        </form>
    </div>

    <!-- Academic Footer -->
    <footer style="text-align: center; padding: 25px 10px; margin-top: 50px; color: #718096; font-size: 13px; border-top: 1px solid #e2e8f0;">
        <p><strong>Car Rental Management System</strong> | DBMS Mini Project</p>
        <p style="margin-top: 5px;">Built with PHP, MySQL & HTML5/CSS3</p>
    </footer>
</body>
</html>