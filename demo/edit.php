<?php

/* This is a file which abstracts the DB connecting functionality */
include("db_connection.php");
/* These are the smarty files */
require 'C:\xampp\htdocs\week6\libs\Smarty.class.php';

$smarty = new Smarty;

/* Define Variable */
$id = ''; 
$value='';

if(isset($_GET['id'])) 
{
    $id = $_GET['id']; 
} 

/* select everything from student table based on 'id' */
$result = mysql_query("SELECT * FROM student WHERE id='$id' ")
		  or die(mysql_error()); 

if($result)
{	
	while($res = mysql_fetch_array($result)) 
	{
		$value[] = $res;
	}; 
	$smarty->assign('value', $value);
	/* Display the edit page through the edit template */
	$smarty->display('edit.tpl');
}

?>