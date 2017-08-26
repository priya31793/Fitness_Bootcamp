<?php
/* Smarty version 3.1.30, created on 2017-08-25 12:57:08
  from "C:\xampp\htdocs\smarty\demo\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a0028432ff04_07811404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea9ebe54bf3971ae30fcca7d442c7e620822bd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\demo\\templates\\index.tpl',
      1 => 1503658625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59a0028432ff04_07811404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1598759a002842e21c4_54915061';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
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
<body>

   <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
					<a class="blog" href="update.php" rel="tooltip" data-placement="bottom" data-original-title="Update Feedback"></a>
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
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your Name...">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="Enter your Email...">
					<label for="add">Address</label>
					<input type="text" id="add" name="add" placeholder="Enter your Address...">
					<label for="city">City</label>
					<input type="text" id="city" name="city" placeholder="Enter your City...">
					<label for="state">State</label>
					<input type="text" id="state" name="state" placeholder="Enter your State...">
					<label for="feedback">Comments</label>
					<input type="text" id="feedback" name="feedback" placeholder="Enter your Comments...">
					<button type="submit" value="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Javascript -->
	<?php echo '<script'; ?>
 src="assets/js/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jquery.backstretch.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/scripts.js"><?php echo '</script'; ?>
>
	
    </body>
</html><?php }
}
