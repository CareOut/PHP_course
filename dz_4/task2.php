<?php

$arrInt = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function minMaxAverage(array $arr): array
{
$finalArr = [];
$min = min($arr);
$finalArr[] = $min;
$max = max($arr);
$finalArr[] = $max;
$average = array_sum($arr)/count($arr);
$finalArr[] = $average;
return $finalArr;
};

$show = minMaxAverage($arrInt);
print_r($show);