#!/usr/bin/php
<?php

$total = 0;
$below = 1000;

for ($i = 3; $i < $below; $i++) {
    if($i % 3 == 0 || $i % 5 == 0)
        $total += $i;
}

echo $total;