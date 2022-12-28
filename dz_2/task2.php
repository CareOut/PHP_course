<?php

$mount = (int)readline("Сколько у вас запланировано задач на сегодня?\n");

if(is_int($mount)) {
    $toDo = "";
    $allTime = 0;
    $question = "Какая задача стоит перед вами сегодня?\n";
    $time = "Сколько примерно времени эта задача займет?\n";

for($i=0; $i<$mount; $i++){
    $task = readline("{$question}");
    $timeTask = readline("{$time}");
    $toDo.= "- $task ({$timeTask}ч)\n";
    $allTime += $timeTask;
}

echo "сегодня у вас запланировано {$mount} приоритетных задачи на день:\n
$toDo
Примерное время выполнения плана = {$allTime}ч";
}