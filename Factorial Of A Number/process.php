<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (!is_numeric($number) || $number < 0) {
        echo "Please enter a valid non-negative number.";
    } else {
        $factorial = 1;

        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        echo "✅ Factorial of $number is: $factorial";
    }
} else {
    echo "Invalid request method.";
}
?>
