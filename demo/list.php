<?php

/* This is a file which abstracts the DB connecting functionality */
include("db_connection.php");
/* These are the smarty files */
require 'C:\xampp\htdocs\week6\libs\Smarty.class.php';

$smarty = new Smarty;

/* Define Variable */
$value = '';

/* Select all data from student table without duplicates */
$query = "SELECT * FROM student where name !='' ORDER BY id DESC ";
$result =  mysql_query($query);

if($result)
{
	while($res = mysql_fetch_array($result)) 
	{
		$value[] = $res;
	};
	$smarty->assign('value', $value);
	/* Display the list page through the list template */
	$smarty->display('list.tpl');
}
				
?>