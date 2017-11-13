<?php
/**
 * @var array $subscriber
 * @var array $errors
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма подписки</title>
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
<?php
    if (isset($errors)){
    foreach ($errors as $error) {?>
    <p class="error"><?= $error ?></p>
<?php }}?>
<div>
    <form action="subscribe.php" method="POST">
        <label>Email <input type="email" name="email" value="<?= $subscriber['email'] ?>"></label>
        <button type="submit">Subscribe</button>
    </form>

</div>
</body>
</html>