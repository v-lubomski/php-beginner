<?php
error_reporting(E_ALL);
ini_set('log_errors', "On");
ini_set('display_errors', "Off");
ini_set('error_log','./error/error_index.log');

session_start();

$a = htmlspecialchars($_POST['a']);
$b = htmlspecialchars($_POST['b']);
$c = htmlspecialchars($_POST['c']);

$addition = $a + $b + $c;
$concatenation = $a . $b . $c;

$_SESSION['addition'] = $addition;
$_SESSION['concatenation'] = $concatenation;
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home02</title>
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p><label>A: <input type="text" name="a" value="<?=$_POST["a"]?>"></label></p>
    <p><label>B: <input type="text" name="b" value="<?=$_POST["b"]?>"></label></p>
    <p><label>C: <input type="text" name="c" value="<?=$_POST["c"]?>"></label></p>
    <p><input type="submit" value="submit"></p>
</form>

</body>
</html>


<?php
echo $addition;
echo "<br>$concatenation";
echo "<br><br><a href='sess.php'>Нажимаем кнопку 'submit' и переходим сюда</a>";
echo $y
?>