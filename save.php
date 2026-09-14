<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customer_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $car = $_POST['car_model'];
    $pickup = $_POST['pickup_date'];
    $return = $_POST['return_date'];

    // SQL Injection Security (Prepared Statement)
    $stmt = $conn->prepare("INSERT INTO bookings (customer_name, email, phone, car_model, pickup_date, return_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $car, $pickup, $return);

    if ($stmt->execute()) {
        echo "<div style='text-align:center; margin-top:50px;'>";
        echo "<h1>Booking Successful!</h1>";
        echo "<p>Booking ID: #" . $stmt->insert_id . "</p>";
        echo "<a href='view.php'>View All Bookings</a> | <a href='index.php'>Book Another Car</a>";
        echo "</div>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>