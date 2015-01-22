#!/usr/bin/php
<?php

// This solution is made accounting for weeks to avoid problems with differences between day/month

// Set timezone to revent Warnings
date_default_timezone_set('America/Sao_Paulo');

$start_date = strtotime('01-01-1901');
$end_date = strtotime('31-12-2000');
$day_in_seconds = 86400;
$week_in_seconds = 7 * $day_in_seconds;
$total = 0;

// Get time stamp of first sunday
$fisrt_sunday = $start_date;
while (date('N', $fisrt_sunday) != 7) {
    $fisrt_sunday = $fisrt_sunday + $day_in_seconds;
}

// Interate 7 days, starting first sunday and verify if is first of the month
for($i = $fisrt_sunday; $i <= $end_date; $i += $week_in_seconds){
    if(date('N', $i) == 7 and date('j', $i) == 1)
        $total++;
}

echo $total;