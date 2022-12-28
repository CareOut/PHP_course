<?php
include "auth.php";

if (is_null($userName)) {
    header("Location: /");
    die();
}

if (isset($_POST['text'])) {
    $task = strip_tags($_POST['text']);
    $_SESSION['task'][] = $task;
    header('Location: toDo.php');
    die();
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $key = $_GET['key'];
    unset($_SESSION['task'][$key]);
    header('Location: toDo.php');
    die();
}

$tasks = $_SESSION['task'] ?? null;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php include "menu.php"; ?>
<a href="/">Главная</a><br>
<h2>Ваши задачи</h2>
<form method="post">
    <input type="text" name="text" placeholder="Новая задача">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (!empty($tasks)): ?>
    <?php foreach ($tasks as $key => $text): ?>
        - <?=$text?> <a href="?action=delete&key=<?=$key?>">[x]</a><br>
    <?php endforeach; ?>
<?php else: ?>
    Нет задач
<?php endif; ?>
</body>
</html>