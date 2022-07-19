<?php
/* Получаем переменные из формы. */
$user_name=$_POST['name'];
echo $user_name;
$surname=$_POST['surname'];
$login=$_POST['login'];
$parol=$_POST['parol'];
$email=$_POST['email'];
/* Запишите передачу остальных переменных. */
/* Определяем значения переменным */ 
$hostname="localhost"; 
$username="f95203ko_001"; 
$password="nPVVYkah"; 
/* Имя базы данных */ 
$dbName="f95203ko_001"; 
/* Имя таблицы */ 
$usertable="Polzovateli"; 
/* Создать соединение с MySql*/ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
/* Выбор БД */ 
MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД");
/* Введение информации в БД */ 
$query="INSERT INTO $usertable VALUES ('$user_name','$surname','$login','$parol','$email')";
$result=MYSQL_QUERY($query);
/* Закрыть соединение */ 
MYSQL_CLOSE(); 
print "Вы успешно зарегисрированы! Запись введена в БД! <br>"; 
?>