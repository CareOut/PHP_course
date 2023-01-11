
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDoList</title>
</head>
<body>
<?php if(is_null($userName)):?>
    <a href="view/signin.php">Войти</a>
<?php else: ?>
   <?=$userName?> <a href="/?controller=security&action=logout">Выйти</a>
   <a href="/?controller=tasks">Задачи</a>
<?php endif; ?>

</body>
</html>