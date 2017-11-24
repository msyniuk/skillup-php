<?php
setcookie('age', mt_rand(10, 70)); // до закрытия браузера

setcookie('age', mt_rand(10, 70), time() + 3600); // на час

setcookie('age', mt_rand(10, 70), time() + 3600 * 3); // на 3 часа

setcookie('age', mt_rand(10, 70), time() + 3600 * 24); // на день

setcookie('age', mt_rand(10, 70), time() + 3600 * 24 * 365); // на год

setcookie('age', mt_rand(10, 70), time() + 3600 * 24 * 3650); // на 10 лет

$expire = 86400 - date('H') * 3600 - date('i') * 60 - date('s');
setcookie('age', mt_rand(10, 70), time() + $expire); // до конца текущего дня

$expire1 = 3600 * 24 * 365 - (date('n')-1) * 3600 * 24 *30 - (date('j')-1) * 3600 * 24 - $expire;
setcookie('age', mt_rand(10, 70), time() + $expire1); // до конца текущего года

echo $_COOKIE['age'];