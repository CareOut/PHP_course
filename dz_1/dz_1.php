<?php
$name = readline("Как Вас зовут?\n");
$age = readline("Сколько Вам лет?\n");
echo "Вас зовут $name, вам $age лет\n";

$taskFirst = readline("Какая задача стоит перед вами сегодня?\n");
$timeFirst = readline("Сколько примерно времени эта задача займет\n");
$taskSecond = readline("Какая еще задача стоит перед вами сегодня?\n");
$timeSecond = readline("Сколько примерно времени эта задача займет\n");
$taskThird = readline("Какая еще задача стоит перед вами сегодня?\n");
$timeThird = readline("Сколько примерно времени эта задача займет\n");
$fullTime = $timeFirst + $timeSecond + $timeThird;
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $taskFirst ($timeFirst);\n - $taskSecond ($timeSecond);\n - $taskThird ($timeThird);\n
Примерное время выполнения плана = $fullTime ч"
?>