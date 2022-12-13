<?php
do
 {
    $finger = (int)readline("Введите число\n");
} while(!is_int($finger) && $finger <= 0);

echo "Данное число соответствует палцу под номером ";

$finger %= 8;

switch(1) {
case $finger === 1:
echo 1;
break;
case $finger === 2 || $finger === 0:
echo 2;
break;
case $finger === 3 || $finger === 7:
echo 3;
break;
case $finger === 4 || $finger === 6:
echo 4;
break;     
default:
echo 5;       
}