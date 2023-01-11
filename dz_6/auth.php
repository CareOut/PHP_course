<?php
session_start();
$userName = null;

if (isset($_POST['username'])) {
      $userName = $_POST['username'];
    $pass = $_POST['pass'] ?? null;
    if ($userName == 'admin' && $pass == 123) {

        $_SESSION['username'] = $userName;
        header('tasks.php ');
        die();
    } else {
        die("Неверный пароль логин");
    }

}

if (isset($_SESSION['username'])) {
      $userName = $_SESSION['username'];
}

