<?php

session_start();

$error = null;

if(isset($_GET['action']) && $_GET['action'] === 'logout')
{
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header("Location: index.php");
    die();
}

if(isset($_POST['username'], $_POST['password']))
{
    ['username' => $userName, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUserNameAndPassword($userName, $password);
    if($user === null)
    {
        $error = 'Пользователь не найден';
    }
    else
    {
$_SESSION['user'] = $user;
    }
}

