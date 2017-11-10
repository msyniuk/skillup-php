<?php
/**
 * @var array $user
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
    </style>
</head>
<body>
<?php foreach ($errors as $error) {?>
    <p class="error"><?= $error ?></p>
<?php }?>

<form action="index.php" method="POST">
    <label>Name <input name="first_name" value="<?= $user['first_name'] ?>"></label>
    <label>Surname <input name="last_name" value="<?= $user['last_name'] ?>"></label>
    <label>Email <input type="email" name="email" value="<?= $user['email'] ?>"></label>
    <label>Phone <input name="phone" value="<?= $user['phone'] ?>"></label>
    <label><input type="checkbox" name="confirm" <?= $user['confirm'] ? 'checked' : '' ?>>I agree</label>
    <button type="submit">Register</button>
</form>
</body>
</html>