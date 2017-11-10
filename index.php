<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

include 'lib.php';

$user = [
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'phone' => '',
    'confirm' => false,

];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user = processRequest($user);
    $errors = validateUser($user);

    if (!$errors) {
        saveUser2($user);
        header('Location: /success.html');
    }

    //var_dump($_POST);
    //var_dump($errors);
}

include 'form.php';
