<?php
include 'WorkerMan.php';

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
        $sql = 'SELECT * FROM workers WHERE id = :id';
        $result = $pdo->prepare($sql);
        $result->execute(['id' => 3]);
        break;
    case 'qt2':
        $sql = 'SELECT * FROM workers WHERE salary= :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 1000]);
        break;
    case 'qt3':
        $sql = 'SELECT * FROM workers WHERE age = :age';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 23]);
        break;
    case 'qt4':
        $sql = 'SELECT * FROM workers WHERE salary > :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 400]);
        break;
    case 'qt5':
        $sql = 'SELECT * FROM workers WHERE salary >= :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 500]);
        break;
    case 'qt6':
        $sql = 'SELECT * FROM workers WHERE salary <> :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 500]);
        break;
    case 'qt7':
        $sql = 'SELECT * FROM workers WHERE salary <= :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 900]);
        break;
    case 'qt8':
        $sql = 'SELECT name, salary, age FROM workers WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Вася']);
        break;
    case 'qt9':
        $sql = 'SELECT * FROM workers WHERE age > :age1 AND age <= :age2';
        $result = $pdo->prepare($sql);
        $result->execute(['age1' => 25, 'age2' => 28]);
        break;
    case 'qt10':
        $sql = 'SELECT * FROM workers WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Петя']);
        break;
    case 'qt11':
        $sql = 'SELECT * FROM workers WHERE name = :name1 OR name = :name2';
        $result = $pdo->prepare($sql);
        $result->execute(['name1' => 'Вася', 'name2' => 'Петя']);
        break;
    case 'qt12':
        $sql = 'SELECT * FROM workers WHERE name <> :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Петя']);
        break;
    case 'qt13':
        $sql = 'SELECT * FROM workers WHERE age = :age OR salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 27, 'salary' => 1000]);
        break;
    case 'qt14':
        $sql = 'SELECT * FROM workers WHERE (age >= :age1 AND age < :age2) OR salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['age1' => 23, 'age2' => 27, 'salary' => 1000]);
        break;
    case 'qt15':
        $sql = 'SELECT * FROM workers WHERE (age > :age1 AND age < :age2) OR (salary > :salary1 AND salary < :salary2 )';
        $result = $pdo->prepare($sql);
        $result->execute(['age1' => 23, 'age2' => 27, 'salary1' => 400, 'salary2' => 1000]);
        break;
    case 'qt16':
        $sql = 'SELECT * FROM workers WHERE age = :age OR salary != :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 27, 'salary' => 400]);
        break;
    case 'qt17':
        $sql = 'INSERT INTO workers SET name = :name, age = :age, salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Никита', 'age' => 26, 'salary' => 300]);
        $result = allrecords($pdo);
        break;
    case 'qt18':
        $sql = 'INSERT INTO workers (name, age, salary) VALUES (:name, :age, :salary)';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Светлана', 'age' => 22, 'salary' => 1200]);
        $result = allrecords($pdo);
        break;
    case 'qt19':
        $sql = 'INSERT INTO workers (name, age, salary) VALUES (:name1, :age1, :salary1), (:name2, :age2, :salary2)';
        $result = $pdo->prepare($sql);
        $result->execute(['name1' => 'Ярослав','age1' => 30, 'salary1' => 1200, 'name2' => 'Петр','age2' => 31, 'salary2' => 1000]);
        $result = allrecords($pdo);
        break;
    case 'qt20':
        $sql = 'DELETE FROM workers WHERE id = :id';
        $result = $pdo->prepare($sql);
        $result->execute(['id' => 7]);
        $result = allrecords($pdo);
        break;
    case 'qt21':
        $sql = 'DELETE FROM workers WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Коля']);
        $result = allrecords($pdo);
        break;
    case 'qt22':
        $sql = 'DELETE FROM workers WHERE age = :age';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 23]);
        $result = allrecords($pdo);
        break;
    case 'qt23':
        $sql = 'UPDATE workers SET salary = :salary WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 200, 'name' => 'Вася']);
        $result = allrecords($pdo);
        break;
    case 'qt24':
        $sql = 'UPDATE workers SET age = :age WHERE id = :id';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 35, 'id' => 4]);
        $result = allrecords($pdo);
        break;
    case 'qt25':
        $sql = 'UPDATE workers SET salary = :salarynew WHERE salary = :salaryold';
        $result = $pdo->prepare($sql);
        $result->execute(['salarynew' => 700, 'salaryold' => 500]);
        $result = allrecords($pdo);
        break;
    case 'qt26':
        $sql = 'UPDATE workers SET age = :age WHERE id > :id1 AND id <= :id2';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 23, 'id1' => 2, 'id2' => 5]);
        $result = allrecords($pdo);
        break;
    case 'qt27':
        $sql = 'UPDATE workers SET name = :namenew, salary = :salary WHERE name = :nameold';
        $result = $pdo->prepare($sql);
        $result->execute(['namenew' => 'Женя', 'nameold' => 'Вася', 'salary' => 900]);
        $result = allrecords($pdo);
        break;
    default:
        break;
}

echo '<table border="1"><tr><th>id</th><th>name</th><th>age</th><th>salary</th></tr>';
while ($row = $result->fetchObject(WorkerMan::class)){
    echo '<tr><td>' . $row->id . '</td><td>' . $row->name .
        '</td><td>' . $row->age . '</td><td>' . $row->salary . '</td></tr>';
    //print_r($row);
    //var_dump($row);
}
echo '</table>';
