<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>

    <?php
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : array();
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);

    // Display the values
    echo "<h2>Submitted Information</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Hobbies:</strong> " . (empty($hobbies) ? 'None' : implode(', ', $hobbies)) . "</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    ?>

</body>
</html>
