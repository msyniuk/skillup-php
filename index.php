<?php
include 'WorkerMan.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','root');

$sql = 'SELECT * FROM workers WHERE salary = :salary';

$result = $pdo->prepare($sql);
$result->execute(['salary' => 500]);

while ($row = $result->fetchObject(WorkerMan::class)){
    print_r($row);
    var_dump($row);
}

