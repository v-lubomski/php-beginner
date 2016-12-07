<?php
error_reporting(E_ALL);
ini_set('log_errors', "On");
ini_set('display_errors', "Off");
ini_set('error_log','./error.log');

echo $a; //выводим на экран значение переменной $a
echo '<br/>'; //выводим на экран пустую строку
echo $b; //выводим на экран значение переменной $b

$a = 5;

$b = 10;

echo 'a='.$a.'	b='.$b; //выводим на экран значение переменных $a, $b


$c = $b;

$b = $a;

$a = $c;

echo '<br/>'; //выводим на экран пустую строку
echo 'a='.$a.'	b='.$b; //выводим на экран значение переменных $a, $b
