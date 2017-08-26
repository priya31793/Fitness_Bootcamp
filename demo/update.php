<?php
include("config.php");
require 'C:\xampp\htdocs\week6\libs\Smarty.class.php';

$smarty = new Smarty;

$id = '';
 
if( isset( $_POST['id'])) {
	$id = $_POST['id']; 
} 

//update the table page
if(isset($_POST['update'])){     
	$result = mysql_query("update student set name=' ".mysql_escape_string($_POST['name'])."',email='".mysql_escape_string($_POST['email'])."',address='".mysql_escape_string($_POST['add'])."',city='".mysql_escape_string($_POST['city'])."',state='".mysql_escape_string($_POST['state'])."' WHERE id='$id' ")
			  or die(mysql_error()); 
	if($result)
	{
	echo "<script>window.location='list.php';</script>";
	}
}		
?>