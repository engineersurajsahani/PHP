<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (!is_numeric($number)) {
        echo "Please enter a valid number.";
    } else {
        if ($number % 2 == 0) {
            echo "✅ $number is an even number.";
        } else {
            echo "❌ $number is an odd number.";
        }
    }
} else {
    echo "Invalid request method.";
}
?>
