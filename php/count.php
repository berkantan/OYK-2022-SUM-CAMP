<?php

$numbers = [1, 4, 16, 45, 65];
$sum = 0;
$count = 0;
$avg = null;
foreach ($numbers as $number) {
    $sum += $number;
    $count++;
};
$avg = $sum / $count;
echo $avg;
