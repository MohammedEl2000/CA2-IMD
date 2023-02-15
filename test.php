<?php
$db = "team188_scout";                          #Database name
$user = "mysqladmin";                 #Database username
$pass = "Password123";                 #Database password
$host = "mysql-terraformserver-1.mysql.database.azure.com";                       #Database server

$conn = mysql_connect($host,$user,$pass) or die("could not connect to server " .mysql_error());
mysql_select_db($db) or die("could not connect to database " .mysql_error());

echo ("Database Connected");
?>
