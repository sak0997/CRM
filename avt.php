<?php
header('Content-Type: text/html; charset=utf-8');
include_once("connect.php");
if(isset($_POST['auth_submit']))
{
$login = $_POST['login'];
$password = $_POST['password']; 
$login=mysql_real_escape_string($login);
$password=mysql_real_escape_string($password);
$query = "SELECT id, login, password
FROM users
WHERE login ='{$login}' AND password='{$password}'
LIMIT 1";
$sql = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($sql) == 1)
echo 'Авторизация прошла успешно!';
else 
echo 'Неправильное имя или пароль';
}
?>
<br><a href="index.html">Выйти</a></br>