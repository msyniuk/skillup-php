<?php
include 'Worker.php';
include 'Worker1.php';
include 'Worker2.php';
include 'Worker3.php';

define('BR', '<br/>');

//Задача 1
$worker1 = new Worker();

$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker();

$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

$sumSalary = $worker1->salary + $worker2->salary;
$sumAge = $worker1->age + $worker2->age;

print('<h3>Задача 1 (получение значений public свойств)</h3>');
print('Сумма зарплат: ' . $sumSalary . BR);
print('Сумма возрастов: ' . $sumAge . BR);

//Задача 2
$worker1 = new Worker1();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker1();

$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

$sumSalary = $worker1->getSalary() + $worker2->getSalary();
$sumAge = $worker1->getAge() + $worker2->getAge();

print('<h3>Задача 2 (получение значений методами)</h3>');
print('Сумма зарплат: ' . $sumSalary . BR);
print('Сумма возрастов: ' . $sumAge . BR);

//Задача 3
print('<h3>Задача 3 (метод checkAge и его проверка)</h3>');
$worker2->setAge(-1);
print($worker2->getAge() . BR);
$worker2->setAge(1);
print($worker2->getAge() . BR);
$worker2->setAge(29);
print($worker2->getAge() . BR);
$worker2->setAge(100);
print($worker2->getAge() . BR);
$worker2->setAge(105);
print($worker2->getAge() . BR);

//Задача 4
$worker = new Worker2('Дима', 25, 1000);
$productAgeSalary = $worker->getAge() * $worker->getSalary();
print('<h3>Задача 4 (метод __construct)</h3>');
print('Произведение возраста и зарплаты для ' . $worker->getName() .
    ' =     ' . $productAgeSalary . BR);

//Задача 5
$worker1 = new Worker3();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker3();

$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

$sumSalary = $worker1->getSalary() + $worker2->getSalary();
$sumAge = $worker1->getAge() + $worker2->getAge();
print('<h3>Задача 5 (наследование User, Worker, Student)</h3>');
var_dump($worker1);
var_dump($worker2);
print('Сумма зарплат: ' . $sumSalary . BR);
