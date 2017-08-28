<?php 
/* This is a file which abstracts the DB connecting functionality */
include("database.php");
/* These are the smarty files */
require 'C:\xampp\htdocs\week6\libs\Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->use_sub_dirs = false;
$smarty->caching = true; 

/* Display the home page through the index template */
$smarty->display('index.tpl');
?>