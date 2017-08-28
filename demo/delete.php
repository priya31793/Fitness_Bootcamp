<?php
/* This is a file which abstracts the DB connecting functionality */
include("database.php");
/* These are the smarty files */
require '..\libs\Smarty.class.php';

$smarty = new Smarty;

/* Define Variable */
$id = ''; 
$value='';

if(isset($_GET['id'])) 
{
    $id = $_GET['id']; 
} 
 
/* delete */ 
$result = mysql_query("delete from student WHERE id='$id' ") or die(mysql_error());
	 
if($result)
{
	echo "<script>window.location='list.php';</script>";
}
		
?>