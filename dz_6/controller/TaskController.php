<?php
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';
include_once 'model/User.php';

session_start();

$userName = null;

if(isset($_SESSION['user']))
{
    $userName = $_SESSION['user']->getUserName();
}
else 
{
    header("Location:/");
    die();
}

$taskProvider = new TaskProvider();

if(isset($_GET['action']) && $_GET['action'] === 'add')
{
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));
    header("Location:/?controller=tasks");
    die();
}

if(isset($_GET['action']) && $_GET['action'] === 'done')
{
    $key = $_GET['key'];
    $taskprovider->deleteTask($key);
    header("Location:/?controller=tasks");
    die();
}

$tasks = $taskProvider->getUndoneList();
include "view/tasks.php";