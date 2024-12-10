<?php
// Check if the cookies are set
if(isset($_COOKIE["user"]) && isset($_COOKIE["email"])) {
    $user = $_COOKIE["user"];
    $email = $_COOKIE["email"];
    
    echo "Welcome back, $user!<br>";
    echo "Your email is: $email";
} else {
    echo "No user data found. Please <a href='set_cookie.php'>set the cookies</a> first.";
}
?>
