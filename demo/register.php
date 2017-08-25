<?php 
include("config.php");
if(isset($_POST))
{
$query = "INSERT INTO student(name,email,feedback) VALUES (' ".mysql_escape_string($_POST['name'])."', '".mysql_escape_string($_POST['email'])."','".mysql_escape_string($_POST['feedback'])."')";
$result =  mysql_query($query);
if($result)
{
	echo "<script>window.location='index.php?msg=successfully inserted ';</script>";
}
}
?>