<?php

define('USERS_FILE', __DIR__ . '/users.txt');
define('SUBSCRIBERS_FILE', __DIR__ . '/subscribers.txt');

function validateSubscriber(array $subscriber) {
    $errors = [];

    if (!$subscriber['email']) {
        $errors[] = 'Введите email!';
    }
    return $errors;
}

function saveUser(array $user){
    if (file_exists(USERS_FILE)){
        $existing_users = file_get_contents(USERS_FILE);
    } else {
        $existing_users = '';
    }

    $user_info = implode("\t", $user);

    $existing_users .= $user_info . PHP_EOL;

    file_put_contents(USERS_FILE, $existing_users);

}

function saveUser2(User $user){
    $file = fopen(USERS_FILE, 'a');

    $user_info = $user . PHP_EOL;
    fputs($file, $user_info);

    fclose($file);

}

function saveSubscriber(array $subscriber){
    $file = fopen(SUBSCRIBERS_FILE, 'a');

    $subscriber_info = implode("\t", $subscriber) . PHP_EOL;
    fputs($file, $subscriber_info);

    fclose($file);

}

//Функция вывода таблицы пользователей
function drawTable($file)
{
    if (file_exists(USERS_FILE)){
        $arr = file($file);
        $str = '<h3>Список пользователей</h3>';
        $str .= "<table border='1' width=\"200\"><tr><th>Имя</th><th>Фамилия</th><th>Email</th>
                <th>Телефон</th><th>Согласие</th></tr>";
        foreach ($arr as $value){
            $stroka = explode("\t", $value);
            $str .= "<tr><td>" . $stroka[0] . "</td>" .
                        "<td>" . $stroka[1] . "</td>" .
                        "<td>" . $stroka[2] . "</td>" .
                        "<td>" . $stroka[3] . "</td>" .
                        "<td>" . $stroka[4] . "</td>" .
                    "</tr>";
        }
        $str .= "</table>";

    } else {
        $str = 'Файл ' . USERS_FILE . ' не найден.';

    }
    return $str;

}
?>