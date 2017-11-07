<?php
    define('BR', '<br/>');
    $a = 10;
    $b = 2;
    echo 'Остаток от деления a на b = ' . $a % $b . BR;

    if ($a % $b == 0){
        echo 'Делится. Результат деления = ' . $a / $b . BR;
    } else {
        echo 'Не делится. Остаток от деления = ' . $a % $b . BR;
    }


    $str = 'html css php';
    $arr = explode(' ', $str);
    print_r ($arr);
    print BR;

    $arr = [1, 2, 3, 4, 5];
    $result = array_slice($arr,1, 3);
    print_r($result);
    print BR;
    array_splice($arr,1,2);
    print_r($arr);
    print BR;
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr,1,2, ['a', 'b', 'c']);
    print_r($arr);
    print BR;

    echo '<h3>Задача № 1</h3>';
    $arr = [1, 2, 3, 4, 5];
    $average = array_sum($arr)/count($arr);
    echo 'Cреднее арифметическое = ' . $average . BR;

    echo '<h3>Задача № 2</h3>';
    echo 'Сумма чисел от 1 до 100 = ' . array_sum(range(1,100)) . BR;

    echo '<h3>Задача № 3</h3>';
    $arr = range(1,100);
    $str = implode('<br/>', $arr);
    echo $str . BR;

    echo '<h3>Задача № 4</h3>';
    $arr = array_fill(0,10, 'x');
    print_r($arr);
    print BR;

    echo '<h3>Задача № 5</h3>';
    $arr = range(1, 10);
    shuffle($arr);
    print_r($arr);

    echo '<h3>Задача № 6</h3>';
    $n = 5;
    $arr = range(1, $n);
    $factorial = array_product($arr);
    echo 'Факториал числа ' . $n . ' = ' . $factorial . BR;

    echo '<h3>Задача № 7</h3>';
    $num = 12345;
    $arr = str_split((string) $num);
    $sum = array_sum($arr);
    echo 'Сумма цифр числа ' . $num . ' = ' . $sum . BR;

    echo '<h3>Задача № 8</h3>';
    $str = 'hello, sea';
    $str = substr_replace($str, ucfirst($str[strlen($str)-1]), strlen($str)-1);
    echo $str . BR;

    echo '<h3>Задача № 9</h3>';
    $arr = [4, 16, 9, 625, 256];
    $res = array_map('sqrt', $arr);
    print_r($res);
    echo BR;

    echo '<h3>Задача № 10</h3>';
    $keys = range('a','z');
    $val = range(1,26);
    $arr = array_combine($keys, $val);
    print_r($arr);


    echo '<h3>Задача № 11</h3>';
    $str = '1234567890';
    $arr = str_split($str, 2);
    $sum = array_sum($arr);
    echo 'Сумма пар чисел = ' . $sum . BR;


