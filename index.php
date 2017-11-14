<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

include 'lib.php';
include 'User.php';
include 'PremiumUser.php';

//$user = new PremiumUser('Test');
$user = new User('Test');
//$user = new User();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = $user->processRequest($_POST);

    if (!$errors) {
        saveUser2($user);
        header('Location: /success.html');
    }

    //var_dump($_POST);
    //var_dump($errors);
}

include 'form.php';
