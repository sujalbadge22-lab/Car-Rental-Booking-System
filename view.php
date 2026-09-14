<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('config.php');

$result = $conn->query("SELECT * FROM bookings ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Management Dashboard</title>
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

    <!-- Table Container -->
    <div class="page-container">
        <h1>All Rental Bookings</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Vehicle Model</th>
                    <th>Pickup Date</th>
                    <th>Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0) { ?>
                    <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><strong>#<?php echo $row['booking_id']; ?></strong></td>
                        <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['car_model']); ?></td>
                        <td><?php echo $row['pickup_date']; ?></td>
                        <td><?php echo $row['return_date']; ?></td>
                        <td><span class="status-badge"><?php echo htmlspecialchars($row['status']); ?></span></td>
                    </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="8" style="text-align:center; padding: 20px;">No rental records found in database.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Academic Footer -->
    <footer style="text-align: center; padding: 25px 10px; margin-top: 50px; color: #718096; font-size: 13px; border-top: 1px solid #e2e8f0;">
        <p><strong>Car Rental Management System</strong> | DBMS Mini Project</p>
        <p style="margin-top: 5px;">Built with PHP, MySQL & HTML5/CSS3</p>
    </footer>
</body>
</html>