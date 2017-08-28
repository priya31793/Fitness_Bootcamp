<?php
/* This is a file which abstracts the DB connecting functionality */
include("database.php");
/* These are the smarty files */
require 'C:\xampp\htdocs\week6\libs\Smarty.class.php';

$smarty = new Smarty;

/* Define Variable */
$id = '';
 
if(isset($_POST['id'])) 
{
	$id = $_POST['id']; 
} 

if(isset($_POST['update']))
{    
	/* update the table page */ 
	$result = mysql_query("update student set name='".mysql_escape_string($_POST['name'])."',email='".mysql_escape_string($_POST['email'])."',address='".mysql_escape_string($_POST['address'])."',city='".mysql_escape_string($_POST['city'])."',state='".mysql_escape_string($_POST['state'])."' WHERE id='$id' ") or die(mysql_error()); 
	if($result)
	{
		echo "<script>window.location='list.php';</script>";
	}
}		
?>