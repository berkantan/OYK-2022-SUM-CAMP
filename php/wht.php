<?php


function ort($numbers)
{
    $sum = 0;
    $count = 0;
    $avg = null;
    foreach ($numbers as $number) {
        $sum += $number;
        $count++;
    };
    $avg = $sum / $count;
    return $avg;
}

$number = [15, 24, 36];
echo   ort($number);
