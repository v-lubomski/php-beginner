<?php
error_reporting(E_ALL);
ini_set('log_errors', "On");
ini_set('display_errors', "Off");
ini_set('error_log','../new_error.log');

echo '<br/>';

$a = 5;

$b = 10;

$c = 15;

echo "a=$a b=$b c=$c";

$c = $b;

$b = $a;

$a = $c+$b;

echo '<br/>';
echo "a=$a b=$b c=$c";