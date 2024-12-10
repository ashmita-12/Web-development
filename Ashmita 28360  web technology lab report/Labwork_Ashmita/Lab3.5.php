<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3.5</title>
</head>
<body>

<h2>Login</h2>

<form action="validate.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
<?php
// Display error message if passed as a URL parameter
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Invalid username or password</p>";
}
?>
</body>
</html>
