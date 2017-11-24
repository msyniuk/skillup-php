<form action="" method="POST">
    <label>Email
        <input type="email" name="email">
    </label>
    <input type="submit" value="Send">
</form>

<?php
if(!empty($_POST['email'])){
    session_start();
    $_SESSION['email'] = $_POST['email'];
}
?>

<?php
session_start();
if(!empty($_SESSION['email'])){
    $email = $_SESSION['email'];
} else {
    $email = '';
}
?>

<form action="" method="POST">
    <label>Имя <input type="text" name="name" value="Имя"></label><br/>
    <label>Фамилия <input type="text" name="surname" value="Фамилия"></label><br/>
    <label>Пароль <input type="password" name="pass"></label><br/>
    <label>Email <input type="email" name="email" value="<?= $email ?>"></label><br/>
    <input type="submit" value="Send">
</form>
