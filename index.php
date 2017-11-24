<?php
define('BR', '<br/>');
session_start();

if(!isset($_SESSION['count'])){
    print 'Вы еще не обновляли эту страницу.';
    $_SESSION['count'] = 0;

} else {
    $_SESSION['count'] += 1;
    print 'Вы обновили эту страницу ' . $_SESSION['count'] . ' раз.' . BR;
}

?>
<p>
    <a href="regexp.php">Регулярные выражения (задачи)</a><br/>
    <a href="session.php">Сессии (задача 3)</a>
</p>

