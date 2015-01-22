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

for ($i = 3; $i < $below; $i += 2) {
    if (isPrime($i))
        $total += $i;
}

echo $total;