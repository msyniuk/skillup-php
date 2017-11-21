<?php
define('BR', '<br/>');

$str = 'aadftfg fgfg@test-first.com <dfdfkh> dfdf <hdf> <gughdf> test@test.com.ua dfdfhfgfgkfg test@test.com fdhdk dfhk';

$res = preg_match_all('/[\w-\.]+@[\w-]+(\.[\w-]+)+/i', $str, $match);

print $res ? 'Найдено' : 'Не найдено' . BR ;

var_dump($match);

$replaced = preg_replace('/(\.[\w-]+)+/', '.info', $str) . BR;

print $replaced;

$replaced = preg_replace('/<(.*)>/iuU', '$1', $str);

print $replaced;
