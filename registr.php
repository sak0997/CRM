<?php
/* �������� ���������� �� �����. */
$user_name=$_POST['name'];
echo $user_name;
$surname=$_POST['surname'];
$login=$_POST['login'];
$parol=$_POST['parol'];
$email=$_POST['email'];
/* �������� �������� ��������� ����������. */
/* ���������� �������� ���������� */ 
$hostname="localhost"; 
$username="f95203ko_001"; 
$password="nPVVYkah"; 
/* ��� ���� ������ */ 
$dbName="f95203ko_001"; 
/* ��� ������� */ 
$usertable="Polzovateli"; 
/* ������� ���������� � MySql*/ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("�� ���� ��������������"); 
/* ����� �� */ 
MYSQL_SELECT_DB($dbName) or die("�� ���� ������� ��");
/* �������� ���������� � �� */ 
$query="INSERT INTO $usertable VALUES ('$user_name','$surname','$login','$parol','$email')";
$result=MYSQL_QUERY($query);
/* ������� ���������� */ 
MYSQL_CLOSE(); 
print "�� ������� ���������������! ������ ������� � ��! <br>"; 
?>