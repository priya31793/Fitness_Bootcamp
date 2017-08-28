<?php
/* This is a file which abstracts the DB connecting functionality */
include("database.php");
/* These are the smarty files */
require '..\libs\Smarty.class.php';
$smarty = new Smarty;
/* Define Variable */
$id = '';
 
if(isset($_POST['id'])) 
{
	$id = $_POST['id']; 
} 
if(isset($_POST['delete']))
{    
	/* delete */ 
	$result = mysql_query("delete from  student WHERE id='$id' ") or die(mysql_error()); 
	if($result)
	{
		echo "<script>window.location='index.php';</script>";
	}
}		
?>