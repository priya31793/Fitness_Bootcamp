<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword="";
$dbName="test";
$con = mysql_connect($dbHost,$dbUser,$dbPassword); 
$sel = mysql_select_db($dbName,$con) or mysql_error();
?>