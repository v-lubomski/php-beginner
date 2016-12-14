<?php
error_reporting(E_ALL);
ini_set('log_errors', "On");
ini_set('display_errors', "Off");
ini_set('error_log','./error/error__sess.log');

session_start();

echo $_SESSION['addition'];
echo "<br>";
echo $_SESSION['concatenation'];