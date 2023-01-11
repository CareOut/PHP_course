<?php

include 'Task.php';
include 'TaskService.php';
include 'User.php';
include 'Comment.php';


$user = new User('first', 'first@mail.ru');

$user->sex = 'male';

$task = new Task($user, 'выучить php', 1);

var_dump($task->getDescription());



TaskService::addComment($user, $task, 'круто');

TaskService::addComment($user, $task, 'ваще круто');

foreach($task->getComments() as $comment)
{
    echo $comment->getText() . PHP_EOL;
}