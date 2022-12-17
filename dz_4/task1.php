<?php

$arrInt = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$newArr = array_map(function($arr){

    if($arr % 2 == 0){
      return  $arr = "четное";
    }
    else {
      return   $arr = "нечетное"; 
    }

}, $arrInt);

print_r($newArr);