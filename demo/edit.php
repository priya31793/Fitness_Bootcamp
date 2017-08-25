<?php
include("config.php");
require 'C:\xampp\htdocs\week6\libs\Smarty.class.php';

$smarty = new Smarty;

$id = $_GET['id'];

//select everything from the table page
$result = mysql_query("SELECT * FROM student WHERE id='$id' ")
or die(mysql_error()); 

if($result)
{	
	while($res = mysql_fetch_array($result)) 
	{
		$value[] = $res;
	}; 
	$smarty->assign('value', $value);

	// Display the edit page through the edit template
	$smarty->display('edit.tpl');
}
?>