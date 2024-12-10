<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3.6</title>
</head>
<body>
<h2>Student Registration Form</h2>
<form action="submit.php" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" required><br><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br><br>
    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other" required>
    <label for="other">Other</label><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
