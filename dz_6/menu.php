<?php if ($userName): ?>
    Добро пожаловать <?=$userName?> <a href="?logout">Exit</a>
<?php else:?>
    <form method="post">
        <input type="text" name="username" placeholder="введите логин">
        <input type="password" name="pass" placeholder="введите пароль">
        <input type="submit">
    </form>
<?php endif;?>
<br>