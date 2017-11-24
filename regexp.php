<?php
define('BR', '<br/>');

//Задача 2
//Дана строка 'aba aca aea abba adca abea'. Напишите регулярку,
//которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.
print '<h3>Задача 2</h3>';

$str = 'aba aca aea abba adca abea';

$res = preg_match_all('/a..a/i', $str, $match);

var_dump($match);

//Задача 5
//Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку,
//которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a',
// буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.
print '<h3>Задача 5</h3>';

$str = 'aa aba abba abbba abca abea';

$res = preg_match_all('/ab*a/', $str, $match);

var_dump($match);

//Задача 9
//Дана строка '2+3 223 2223'. Напишите регулярку,
//которая найдет строку 2+3, не захватив остальные.
print '<h3>Задача 9</h3>';

$str = '2+3 223 2223';

$res = preg_match_all('/2\+3/', $str, $match);

var_dump($match);

//Задача 14
//Дана строка 'aba accca azzza wwwwa'. Напишите регулярку,
//которая найдет все строки по краям которых стоят буквы 'a',
//и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a).
print '<h3>Задача 14</h3>';
$str = 'aba accca azzza wwwwa';

$res = preg_replace('/a.+?a/', '!', $str);

print $res;

//Задача 5, глава 2
//Дана строка 'a1a a22a a333a a4444a a55555a aba aca'. Напишите регулярку,
//которая найдет строки, в которых по краям стоят буквы 'a',
//а между ними любое количество цифр.
print '<h3>Задача 5, глава 2</h3>';

$str = 'a1a a22a a333a a4444a a55555a aba aca';

//$res = preg_match_all('/a\d{1,}a/', $str, $match);
$res = preg_match_all('/a\d+a/', $str, $match);

var_dump($match);

//Задача 8
//Дана строка 'ave a#b a2b a$b a4b a5b a-b acb'. Напишите регулярку,
//которая найдет строки следующего вида: по краям стоят буквы 'a' и 'b',
//а между ними - не буква и не цифра
print '<h3>Задача 8, глава 2</h3>';

$str = 'ave a#b a2b a$b a4b a5b a-b acb';

$res = preg_match_all('/a\Wb/', $str, $match);

var_dump($match);

//Задача 19
//Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку,
//которая найдет строки следующего вида: по краям стоят буквы 'a',
//а между ними - маленькие и большие латинские буквы, не затронув остальных.
print '<h3>Задача 19, глава 2</h3>';

$str = 'aAXa aeffa aGha aza ax23a a3sSa';

$res = preg_match_all('/a[a-zA-Z]+a/', $str, $match);

var_dump($match);
