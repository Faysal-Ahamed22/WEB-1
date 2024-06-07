<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = readline("Enter a number: ");
if (isPrime($number)) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}
?>
