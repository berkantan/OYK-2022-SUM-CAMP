<?php
$x = 0;
$sum = 0;
$numbers = [12, 56, 23];
$ort = $sum / $x;
function ($ort) {
    $sum = 0;
    $count = 0;
    $avg = null;
    foreach ($numbers as $number) {
        $sum += $number;
        $count++;
    };
    $avg = $sum / $count;
    echo $avg;
};
echo $ort;
