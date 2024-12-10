<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAb 3.11</title>
</head>
<body>

<h2>Passing Variables through URL in PHP</h2>

<?php
// Variables to pass
$name = "Ashmita Dahal";
$age = 21;
$city = "Kathmandu";

// Create a URL with the variables
$url = "process.php?name=" . urlencode($name) . "&age=" . urlencode($age) . "&city=" . urlencode($city);
?>

<!-- Link to process.php with variables passed via URL -->
<a href="<?php echo $url; ?>">Click here to send data</a>

</body>
</html>
