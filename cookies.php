<?php
define('BR', '<br/>');
print '<h3>Счетчик на куках (задача 6)</h3>';
if(!isset($_COOKIE['count'])){
    print 'Вы еще не обновляли эту страницу.' . BR;
    setcookie('count', 1, time() + 86400);
} else {
    $count = $_COOKIE['count'] + 1;
    setcookie('count', $count, time() + 86400);
    print 'Вы обновили эту страницу ' . $_COOKIE['count'] . ' раз.' . BR;
}

//Задача 3
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

print '<h3>Задача 3</h3>';
echo 'Возраст из установленной куки age - ' . $_COOKIE['age'] . BR;

print '<h3>Баннер (задача 7)</h3>';

if(!isset($_COOKIE['banner_hide'])){
    $hide ='visibility: visible;';
    setcookie('banner_hide', 'hide', time() + 86400 * 30);
} else {
    $hide ='visibility: hidden;';
}
?>
<div>
    <div style="background-image:url('banner.jpg'); width: 200px; height: 200px; <?= $hide ?>">
        <div style="position: relative; top: 160px; left: 30px">
            <form action="" method="POST">
                <input name="hide" type="submit" value="Не показывать"/>
            </form>
        </div>
    </div>
</div>

