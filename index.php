<?php
    $arr = ['html', 'css', 'php', 'js', 'jq'];

	foreach ($arr as $value){
        echo $value . PHP_EOL;
    }

    $arr = [1, 2, 3, 4, 5];

    $result = 0;
    foreach ($arr as $value){
        $result += $value;
    }
    echo PHP_EOL;
    echo $result . PHP_EOL;

    $result = 0;
    foreach ($arr as $value){
        $result += $value * $value;
    }
    echo PHP_EOL;
    echo $result . PHP_EOL;

    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
    foreach ($arr as $key => $value){
        echo $key . ' - ' . $value . PHP_EOL;
    }
    echo PHP_EOL;
    $arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
    foreach ($arr as $key => $value){
        echo $key . ' - зарплата ' . $value . ' долларов' . PHP_EOL;
    }
    echo PHP_EOL;
    for ($i = 1; $i<=100; $i++){
        echo $i . PHP_EOL;
    }
    echo PHP_EOL;
    for ($i = 11; $i<=33; $i++){
        echo $i . PHP_EOL;
    }