<?php

$arrInt = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$newArr = array_map(function(int $el):string 
{
return $el & 1 ? 'нечетное' : 'четное';

}, $arrInt);

print_r($newArr);