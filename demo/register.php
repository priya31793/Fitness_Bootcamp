<?php 

/* This is a file which abstracts the DB connecting functionality */
include("db_connection.php");

if(isset($_POST))
{
	/* Insert form data into student table */
	$query = "INSERT INTO student(name,email,address,city,state,feedback) VALUES (' ".mysql_escape_string($_POST['name'])."', '".mysql_escape_string($_POST['email'])."','".mysql_escape_string($_POST['address'])."','".mysql_escape_string($_POST['city'])."','".mysql_escape_string($_POST['state'])."','".mysql_escape_string($_POST['feedback'])."')";
	$result =  mysql_query($query);
	if($result)
	{
		echo "<script>window.location='index.php';</script>";
	}
}

?>