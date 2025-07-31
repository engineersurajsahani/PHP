<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (!is_numeric($number) || $number < 1) {
        echo "Please enter a valid positive integer.";
    } else {
        $isPrime = true;

        if ($number == 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "✅ $number is a prime number.";
        } else {
            echo "❌ $number is not a prime number.";
        }
    }
} else {
    echo "Invalid request method.";
}
?>
