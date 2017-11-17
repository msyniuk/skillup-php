<?php
include 'Worker.php';
include 'Worker1.php';
include 'Worker2.php';
include 'Worker3.php';
include 'Student.php';
include 'Driver.php';
include 'Form.php';
include 'SmartForm.php';

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

$student = new Student();

$student->setName('Студент');
$student->setAge(20);
$student->setGrants(200);
$student->setYearNumber(2);
var_dump($student);

print('<h3>Задача 6 (класс Driver)</h3>');

$driver = new Driver('Витя', 60, 1000);

$driver->setDrivePeriod(30);
$driver->setCategory('E');
var_dump($driver);

print('<h3>Задача 7 (класс Form)</h3>');
$form = new Form();
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
//Код выше выведет <form action="index.php" method="POST">

echo $form->input(['type'=>'text', 'value'=>'hi']) . BR ;
//Код выше выведет <input type="password" value="hi">
echo $form->password(['value'=>'***']) . BR;
//Код выше выведет <input type="password" value="***">

echo $form->submit(['value'=>'go']) . BR;
//Код выше выведет <input type="submit" value="go">

echo $form->textarea(['placeholder'=>'123', 'value'=>'!!!']);
//Код выше выведет <textarea placeholder="123">!!!</textarea>

echo $form->close();
//Код выше выведет </form>

print('<h3>Задача 8 (класс SmartForm)</h3>');
$form = new SmartForm();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_POST as $key=>$value){
        $form->set($key, $value);
    }
}

echo $form->open(['action'=>'index.php', 'method'=>'POST']);

echo $form->input(['type'=>'text', 'value'=>$form->get('text'), 'name'=>'text']) . BR ;

echo $form->password(['value'=>$form->get('pass'), 'name'=>'pass']) . BR;
//Код выше выведет <input type="password" value="***">

echo $form->submit(['value'=>'go']) . BR;
//Код выше выведет <input type="submit" value="go">

echo $form->textarea(['placeholder'=>'123', 'value'=>$form->get('Hello!'), 'name'=>'textbox']);
//Код выше выведет <textarea placeholder="123">!!!</textarea>

echo $form->close();
//Код выше выведет </form>



