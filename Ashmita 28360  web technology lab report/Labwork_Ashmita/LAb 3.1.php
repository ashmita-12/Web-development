<?php
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero error.");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 0);
    echo "The result is: " . $result;
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}
?>
