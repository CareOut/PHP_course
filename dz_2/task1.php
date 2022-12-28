<?php
while(true) {
   
    $answer = (int)readline("Назовите год Бородинской битвы.\n
    1. 1380\n
    2. 1812\n
    3. 1945\n");

    if($answer === 1812) {

        echo "Congrats! You win!";
        break;
    } 

    elseif ($answer === 1380 || $answer === 1945) {
        
        echo "Wrong answer!";
        break;
    }
}