<?php
    include 'init.php';

    $error = '';

    if (isset($_POST['username'])) {
        if ($_POST['username'] == 'user' && $_POST['password'] == 'pass') {
            $_SESSION['user'] = $_POST['username'];

            header('location: index.php');
            exit();
        } else {
            $error = 'Неверное имя пользователя или пароль';
            unset($_SESSION['user']);

        }
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
Вход
<?= $error ?>
<form method="post">
    <label>
        Username
        <input name="username">
    </label>
    <label>
        Password
        <input type="password" name="password">
    </label>
    <input type="submit" value="Sign in">
</form>
</body>
</html>
