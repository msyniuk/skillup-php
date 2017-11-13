<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

include 'lib.php';

$subscriber = [
    'email' => '',
];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $subscriber = processRequest($subscriber);
    $errors = validateSubscriber($subscriber);

    if (!$errors) {
        saveSubscriber($subscriber);
        header('Location: /success_subscribe.html');
    }

    //var_dump($_POST);
    //var_dump($errors);
}

include 'formsubscribe.php';
