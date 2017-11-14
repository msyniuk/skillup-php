<?php
/**
 * @var User $user
 * @var array $errors
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
    <style>
        label{
            display: block;
        }
        .error {
            color: red;
        }
        th {

        }
    </style>
</head>
<body>
<?php foreach ($errors as $error) {?>
    <p class="error"><?= $error ?></p>
<?php }?>
<div>
<form action="index.php" method="POST">
    <label>Name <input name="firstName" value="<?= $user->firstName ?>"></label>
    <label>Surname <input name="lastName" value="<?= $user->lastName ?>"></label>
    <label>Email <input type="email" name="email" value="<?= $user->email ?>"></label>
    <label>Phone <input name="phone" value="<?= $user->phone ?>"></label>
    <label><input type="checkbox" name="confirm" <?= $user->confirm ? 'checked' : '' ?>>I agree</label>
    <button type="submit">Register</button>
</form>
</div>
<div>
    <a href="formsubscribe.php">Форма подписки</a>
</div>
<p>
<?php
echo(drawTable(USERS_FILE));
?>
</p>
</body>
</html>