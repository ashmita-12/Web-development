<?php
// Arithmetic Operators
$a = 10;
$b = 5;

echo "Arithmetic Operators:<br>";
echo "Addition: a + b = " . ($a + $b) . "<br>";         // Addition
echo "Subtraction: a - b = " . ($a - $b) . "<br>";      // Subtraction
echo "Multiplication: a * b = " . ($a * $b) . "<br>";   // Multiplication
echo "Division: a / b = " . ($a / $b) . "<br>";         // Division
echo "Modulus: a % b = " . ($a % $b) . "<br>";          // Modulus
echo "Exponentiation: a ** b = " . ($a ** $b) . "<br>"; // Exponentiation

echo "<br>";

// Comparison Operators
$x = 10;
$y = 20;

echo "Comparison Operators:<br>";
echo "x == y : " . ($x == $y ? 'true' : 'false') . "<br>";    // Equal
echo "x != y : " . ($x != $y ? 'true' : 'false') . "<br>";    // Not equal
echo "x < y  : " . ($x < $y ? 'true' : 'false') . "<br>";     // Less than
echo "x > y  : " . ($x > $y ? 'true' : 'false') . "<br>";     // Greater than
echo "x <= y : " . ($x <= $y ? 'true' : 'false') . "<br>";    // Less than or equal to
echo "x >= y : " . ($x >= $y ? 'true' : 'false') . "<br>";    // Greater than or equal to

echo "<br>";

// Logical Operators
$p = true;
$q = false;

echo "Logical Operators:<br>";
echo "p && q : " . ($p && $q ? 'true' : 'false') . "<br>";   // AND
echo "p || q : " . ($p || $q ? 'true' : 'false') . "<br>";   // OR
echo "!p       : " . (!$p ? 'true' : 'false') . "<br>";        // NOT

?>
