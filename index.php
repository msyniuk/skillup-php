<?php
include 'Worker.php';
include 'Worker1.php';

define('BR', '<br/>');

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

