<?php

define('BR', '<br/>');

$time = new DateTime('yesterday 14:00');

print $time->format('d.m.Y H:i:s') . BR;

$newTime = $time->add(new DateInterval('P3DT5M'));

print $newTime->format('d.m.Y H:i:s') . BR;

$birthDate = new DateTime('1979-12-14 01:40:00');
$age = $birthDate->diff(new DateTime());

print $age->format('%y лет %m месяцев %d дней');
