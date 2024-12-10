<?php
// Database configuration
$servername = "localhost"; // Usually "localhost"
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "students"; // The name of your database
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve form data
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO student (name, address, phone, age, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $name, $address, $phone, $age, $gender);
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
