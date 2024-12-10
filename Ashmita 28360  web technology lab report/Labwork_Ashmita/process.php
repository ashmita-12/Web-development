<?php
// Check if variables are passed in the URL
if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['city'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $city = $_GET['city'];

    echo "<h2>Received Data</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
    echo "City: " . htmlspecialchars($city) . "<br>";
} else {
    echo "No data received.";
}
?>
