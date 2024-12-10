<?php
// Hardcoded username and password for demonstration
$valid_username = 'admin';
$valid_password = 'password123';

// Retrieve input from form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $valid_username && $password === $valid_password) {
    // Start a session and redirect to welcome page
    session_start();
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    // Redirect back to the login page with an error message
    header("Location: Lab3.5.php?error=1");
    exit();
}
?>
