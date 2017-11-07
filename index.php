<?php
    //Task1
    $arr = ['html', 'css', 'php', 'js', 'jq'];

	foreach ($arr as $value){
        echo $value . PHP_EOL;
    }
    //Task2
    $arr = [1, 2, 3, 4, 5];

    $result = 0;
    foreach ($arr as $value){
        $result += $value;
    }
    echo PHP_EOL;
    echo $result . PHP_EOL;

    //Task3
    $result = 0;
    foreach ($arr as $value){
        $result += $value * $value;
    }
    echo PHP_EOL;
    echo $result . PHP_EOL;

    //Task4
    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
    foreach ($arr as $key => $value){
        echo $key . ' - ' . $value . PHP_EOL;
    }
    echo PHP_EOL;

    //Task5
    $arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
    foreach ($arr as $key => $value){
        echo $key . ' - зарплата ' . $value . ' долларов' . PHP_EOL;
    }
    echo PHP_EOL;

    //Task6
    for ($i = 1; $i<=100; $i++){
        echo $i . PHP_EOL;
    }
    echo PHP_EOL;
    $i = 1;
    while ($i <= 100){
        echo $i . PHP_EOL;
        $i++;
    }

    //Task7
    for ($i = 11; $i<=33; $i++){
        echo $i . PHP_EOL;
    }
    $i = 11;
    while ($i <= 33){
        echo $i . PHP_EOL;
        $i++;
    }

    //Task8
    //Выведите столбец четных чисел в промежутке от 0 до 100.
    for ($i = 0; $i<=100; $i++){
        if ( $i%2 == 0 ) {
            echo $i . PHP_EOL;
        }
    }
    $i = 0;
    while ($i <= 100){
        if ( $i%2 == 0 ) {
            echo $i . PHP_EOL;
        }
        $i++;
    }
    echo PHP_EOL;

    //Task9
    //С помощью цикла найдите сумму чисел от 1 до 100.
    $sum = 0;
    for ($i = 1; $i<=100; $i++){
        $sum += $i;
    }
    echo 'Сумма чисел от 1 до 100 = ' . $sum . PHP_EOL;
    echo PHP_EOL;

    $sum =0;
    $i = 0;
    while ($i <= 100){
        $sum += $i;
        $i++;
    }
    echo 'Сумма чисел от 1 до 100 = ' . $sum . PHP_EOL;
    echo PHP_EOL;

    //Task10
    //Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
    // выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10
    $arr = [2, 5, 9, 15, 0, 4];
    foreach($arr as $value){
        if ($value > 3 && $value < 10){
            echo $value . PHP_EOL;
        }
    }
    echo PHP_EOL;

    //Task11
    //Дан массив с числами. Числа могут быть положительными и отрицательными.
    // Найдите сумму положительных элементов этого массива
    $arr = [-2, 5, 9, -15, 0, -4];
    $sum = 0;
    foreach($arr as $value){
        if ($value > 0){
            $sum += $value;
        }
    }
    echo 'Сумма положительных элементов = ' . $sum . PHP_EOL;
    echo PHP_EOL;

    //Task12
    //Дан массив с элементами 1, 2, 5, 9, 4, 13, 4, 10. С помощью цикла foreach и оператора
    // if проверьте есть ли в массиве элемент со значением, равным 4.
    // Если есть - выведите на экран 'Есть!' и выйдите из цикла.
    // Если нет - ничего делать не надо
    $arr = [1, 2, 5, 9, 4, 13, 4, 10];
    foreach($arr as $value){
        if ($value = 4){
            echo 'Есть!' . PHP_EOL;
            break;
        }
    }
    echo PHP_EOL;

    //Task13
    // Дан массив числами, например: ['10', '20', '30', '50', '235', '3000']. Выведите на
    // экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.
    $arr = ['10', '20', '30', '50', '235', '3000'];
    foreach($arr as $value){
        if (($value[0] == '1') || ($value[0] == '2') || ($value[0] == '5')){
            echo $value . PHP_EOL;
        }
    }
    echo PHP_EOL;

    //Task14
    // Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
    // С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $str = '-';
    foreach($arr as $value){
        $str .= $value . '-';
    }
    echo $str . PHP_EOL;
    echo PHP_EOL;

    //Task15
    // Составьте массив дней недели. С помощью цикла foreach
    // выведите все дни недели, а выходные дни выведите жирным
    $arr = [
        'понедельник',
        'вторник',
        'среда',
        'четверг',
        'пятница',
        'суббота',
        'воскресенье'
    ];
    $str = '-';
    foreach($arr as $value){
        if ($value === 'суббота' || $value === 'воскресенье'){
            echo '<b>' . $value . '</b>' . PHP_EOL;
        } else {
            echo $value . PHP_EOL;
        }
    }

    //Task16
    // Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    // а текущий день выведите курсивом. Текущий день должен храниться в переменной $day

    $day = date('w');
    foreach($arr as $key=>$value){
        if ($key == $day--){
            echo '<i>' . $value . '</i>' . PHP_EOL;
        } else {
            echo $value . PHP_EOL;
        }
    }

    //Task17
    // С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен
    // получится массив [1, 2, 3... 100]
    for ($i = 1; $i<=100; $i++){
        $arr[$i-1] = $i;
    }
    var_dump($arr);

    //Task18
    // Дан массив $arr. С помощью цикла foreach
    // запишите английские названия в массив $en, а русские - в массив $ru
    $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
    $day = date('w');
    foreach($arr as $key=>$value){
        $en[] = $key;
        $ru[] = $value;
    }
    var_dump($en);
    var_dump($ru);

    //Task19
    // Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет
    // меньше 50. Какое число получится? Посчитайте количество итераций,
    // необходимых для этого (итерация - это проход цикла).
    // Решите задачу сначала через цикл while, а потом через цикл for
    $num = 1000;
    $i = 0;
    while ($num > 50){
        $num = $num / 2;
        $i++;
    }
    echo 'Получилось число ' . $num . '; Итераций: ' . $i . PHP_EOL;
    echo PHP_EOL;

    for ($i = 0, $num=1000; $num > 50; $num /=2, $i++);
    echo 'Получилось число ' . $num . '; Итераций: ' . $i . PHP_EOL;



