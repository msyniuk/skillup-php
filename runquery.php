<?php
include 'Order.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

function allrecords($pdo){
    $sql = 'SELECT * FROM workers';
    $result = $pdo->prepare($sql);
    $result->execute();
    return $result;
}
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','root');

switch ($_POST['query']){
    case 'qt1':

        $sql = 'SELECT o.order_id, l.name
                FROM orders o
                JOIN lusers l ON o.lusers_id = l.luser_id
                WHERE o.status = :status';
        $result = $pdo->prepare($sql);
        $result->execute(['status' => 0]);
        echo '<table border="1"><tr><th>order_id</th><th>name</th></tr>';
        while ($row = $result->fetchObject(Order::class)) {
            echo '<tr><td>' . $row->order_id . '</td><td>' . $row->name . '</td></tr>';
        }
            break;
    case 'qt2':
        $sql = 'SELECT l.name, o.status
                FROM orders o
                JOIN lusers l ON o.lusers_id = l.luser_id
                WHERE o.status = :status
                GROUP BY l.name';
        /* вариант с подзапросом
        $sql = 'SELECT l.luser_id, l.name
                FROM lusers l
                WHERE l.luser_id
                  IN (SELECT o.lusers_id
                      FROM orders o
                      WHERE o.status = :status)';*/
        $result = $pdo->prepare($sql);
        $result->execute(['status' => 0]);
        echo '<table border="1"><tr><th>name</th></tr>';
        while ($row = $result->fetchObject(Order::class)) {
            echo '<tr><td>' . $row->name . '</td></tr>';
        }
        break;
    case 'qt3':
        $sql = 'SELECT l.luser_id, l.name, COUNT(o.lusers_id) AS count_order
                FROM orders o
                JOIN lusers l ON o.lusers_id = l.luser_id
                WHERE o.status = :status
                GROUP BY l.luser_id, l.name
                HAVING COUNT(*) >= :order_count';
        $result = $pdo->prepare($sql);
        $result->execute(['status' => 1, 'order_count' => 3]);
        echo '<table border="1"><tr><th>luser_id</th><th>name</th><th>count_order</th></tr>';
        while ($row = $result->fetchObject(Order::class)) {
            echo '<tr><td>' . $row->luser_id . '</td><td>' . $row->name . '</td><td>' . $row->count_order . '</td></tr>';
        }
        break;
    default:
        break;
}

    //print_r($row);
    //var_dump($row);
echo '</table>';
