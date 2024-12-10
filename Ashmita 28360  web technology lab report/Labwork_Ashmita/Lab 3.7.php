<?php
session_start(); // Start the session

// Check if the page views count is already set in the session
if(isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1; // Increment the count
} else {
    $_SESSION['views'] = 1; // Set the initial count to 1 if not set
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3.7</title>
</head>
<body>

<h1>Page View Counter</h1>

<p>This page has been viewed <?php echo $_SESSION['views']; ?> times.</p>

</body>
</html>
