
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php if(is_null($userName)):?>
    <a href="/?controller=security">Войти</a>
<?php else: ?>
   <?=$userName?> <a href="/?controller=security&action=logout">Выйти</a>
   <a href="/">Главная</a>
<?php endif; ?>
<a href="/">Главная</a><br>
<h2>Ваши задачи</h2>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="text" placeholder="Новая задача">
    <input type="submit" value="Добавить">
</form>
<br>
<?php if (!empty($tasks)): ?>
    <?php foreach ($tasks as $key => $task): ?>
        <div>
        - <?=$task->getDescription()?> <a href="?controller=tasks&action=done&key=<?=$key?>">[x]</a><br>
    </div>
    <?php endforeach; ?>
<?php else: ?>
    Нет задач
<?php endif; ?>
</body>
</html>