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

    $arr = [1, 2, 3, 4, 5];
    $average = array_sum($arr)/count($arr);
    echo $average . BR;

    echo 'Сумма чисел от 1 до 100 = ' . array_sum(range(1,100)) . BR;

    $arr = range(1,100);
    $str = implode('<br/>', $arr);
    echo $str . BR;

    $arr = array_fill(0,10, 'x');
    print_r($arr);
    print BR;

    $n = 5;
    $arr = range(1, $n);
    $factorial = array_product($arr);
    echo 'Факториал числа ' . $n . ' = ' . $factorial . BR;

    $num = 12345;
    $arr = str_split((string) $num);
    $sum = array_sum($arr);
    echo 'Сумма цифр числа ' . $num . ' = ' . $sum . BR;

    $str = 'hello, sea';
    $str = substr_replace($str, ucfirst($str[strlen($str)-1]), strlen($str)-1);
    echo $str . BR;






