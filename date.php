<?php
define('BR', '<br/>');
$time = time();
print $time . BR;

print (date('r', time())) . BR ;

print strtotime('2017-12-14 01:40:00') . BR;

print strtotime('+10 day', $time);