<?php
error_reporting(E_ALL);
ini_set('log_errors', "On");
ini_set('display_errors', "Off");
ini_set('error_log', './error.log');

function myfunc()
{
    if (isset($_GET['a']) && isset($_GET['b'])) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        if (is_numeric($a) && is_numeric($b)) {
            $divide = $a / $b;
            return round($divide, 2, PHP_ROUND_HALF_EVEN);
        } else {
            return "Wrong arguments";
        }
    } else {
        return "Wrong arguments";
    }
}

echo myfunc();