<?php
$dblocation = "localhost";
$dbname = "f95203ko_001";
$dbuser = "f95203ko_001";
$dbpasswd = "nPVVYkah";
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) 
{
echo( "<P> В настоящий момент сервер базы данных не доступен, поэтому корректное отображение страницы невозможно. </P>" );
exit();
}
if (!@mysql_select_db($dbname, $dbcnx)) 
{
echo( "<P> В настоящий момент база данных не доступна, поэтому корректное отображение страницы невозможно. .</P>" );
exit();
}
?>