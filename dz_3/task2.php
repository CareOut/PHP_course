<?php

$wishes = ['счастья', 'здоровья', 'достатка', 'оптимизма', 'настроения', ];
$epitets = ['бесконечного', 'яркого', 'безудержного', 'крепкого', 'повышенного'];
$words = [];

$name = readline("Как вас зовут?\n");

for($i=0; $i<3; $i++) {
    $currentWishIndex = array_rand($wishes);
    $currentEpitetsIndex = array_rand($epitets);
    $words[] = "{$epitets[$currentEpitetsIndex]} {$wishes[$currentWishIndex]}";
    unset($wishes[$currentWishIndex]);
    unset($epitets[$currentEpitetsIndex]);
}

$bestWishes = implode(',', $words);

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $bestWishes!";

// так пока и не придумал, как перед последним пожеланием поставить союз "и"
