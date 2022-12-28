<?php

$name = readline("Как Вас зовут?\n");
$age = readline("Сколько Вам лет?\n");

echo "Вас зовут $name, вам $age лет\n";


$question = "Какая задача стоит перед вами сегодня?\n";
$time = "Сколько примерно времени эта задача займет?\n";

$taskFirst = readline("$question");
$timeFirst = (int)readline("$time");

$taskSecond = readline("$question");
$timeSecond = (int)readline("$time");

$taskThird = readline("$question");
$timeThird = (int)readline("$time");

$fullTime = $timeFirst + $timeSecond + $timeThird;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $taskFirst ({$timeFirst}ч);
- $taskSecond ({$timeSecond}ч);
- $taskThird ({$timeThird}ч);
Примерное время выполнения плана = {$fullTime}ч";
