#!/usr/bin/php
<?php
// Starts in 2 cause is the first prime number
$total = 2;
$below = 2000000;

function isPrime($num) {
    for($i = 3; $i <= sqrt($num); $i += 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}

// Start at 3 cause 2 is computed for default in total
// Salt 2 to get only odd numbers
for ($i = 3; $i < $below; $i += 2) {
    if (isPrime($i))
        $total += $i;
}

echo $total;