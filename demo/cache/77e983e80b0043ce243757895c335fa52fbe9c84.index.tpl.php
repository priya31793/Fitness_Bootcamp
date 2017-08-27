<?php
/* Smarty version 3.1.30, created on 2017-08-27 07:26:18
  from "C:\xampp\htdocs\week6\demo\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a257fa422527_13315088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5dd5c0cc1d14a5d69015c3bbd2b1235043140c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\week6\\demo\\templates\\index.tpl',
      1 => 1503811491,
      2 => 'file',
    ),
    '189ef5350d7ef2b9376dd2d0ffeb4635ad5c4e0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\week6\\demo\\templates\\header.tpl',
      1 => 1503806685,
      2 => 'file',
    ),
    '162423f2e6c5562d8ff6df28cee1b5316ad029aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\week6\\demo\\templates\\footer.tpl',
      1 => 1503806881,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59a257fa422527_13315088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<HTML>
<HEAD>
	<head>
        <meta charset="utf-8">
        <title>Parents Queries</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
</HEAD>
<BODY bgcolor="#ffffff">

<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="logo span4">
					<h1>
						<a href="">Parents Enquiry Form <span class="red">.</span></a>
					</h1>
				</div>
				<div class="links span8">
					<a class="home" href="index.php" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
					<a class="blog" href="list.php" rel="tooltip" data-placement="bottom" data-original-title="Update Contact"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="register-container container">
		<div class="row">
			<div class="iphone span5">
				<img src="assets/img/iphone.png" alt="">
			</div>
			<div class="register span6">
				<form action="register.php" method="post">
					<h2>  
						<span class="red"><strong>Contact US</strong></span>
					</h2>
					<label for="Name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your Name..." pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+">
					<label for="Email">Email</label>
					<input type="email" id="email" name="email" placeholder="Enter your Email...">
					<label for="Address">Address</label>
					<input type="text" id="address" name="address" placeholder="Enter your Address...">
					<label for="City">City</label>
					<input type="text" id="city" name="city" placeholder="Enter your City...">
					<label for="State">State</label>
					<input type="text" id="state" name="state" placeholder="Enter your State...">
					<label for="Feedback">Comments</label>
					<input type="text" id="feedback" name="feedback" placeholder="Enter your Comments...">
					<button type="submit" value="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	
		<!-- Javascript -->
	<script src="assets/js/jquery-1.8.2.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</BODY>
</HTML>
	
    </body>
</html><?php }
}
