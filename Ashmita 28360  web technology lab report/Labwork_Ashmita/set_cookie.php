<?php
// Set a cookie named "user" with the value "John Doe" and an expiration time of 1 hour
setcookie("user", "Ashmita Dahal", time() + 3600, "/"); // 3600 seconds = 1 hour

// Set a cookie named "email" with a value "john.doe@example.com" and an expiration time of 1 hour
setcookie("email", "dahalashmita12@gmail.com", time() + 3600, "/");

echo "Cookies have been set. <a href='get_cookie.php'>Click here</a> to see the values.";
?>
