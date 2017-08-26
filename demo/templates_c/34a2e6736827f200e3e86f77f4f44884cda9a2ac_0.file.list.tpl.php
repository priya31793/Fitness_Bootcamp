<?php
/* Smarty version 3.1.30, created on 2017-08-26 08:05:29
  from "C:\xampp\htdocs\week6\demo\templates\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a10fa9b92b18_42798214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a2e6736827f200e3e86f77f4f44884cda9a2ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\week6\\demo\\templates\\list.tpl',
      1 => 1503727521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59a10fa9b92b18_42798214 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
					<a class="blog" href="list.php" rel="tooltip" data-placement="bottom" data-original-title="Update Feedback"></a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="register-container container" style="" >
		<div class="row" >
			<div class="register" style="background-color:white;" >	  
			<table class="table table-hover table-responsive" style="border-radius: 8px;">
				<thead style="background-color:#ff4d4d; ">
					<tr>
						<th >Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>Comments</th>
						<th>Edit</th>
					</tr>
				</thead>
				<?php
$__section_value_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_value']) ? $_smarty_tpl->tpl_vars['__smarty_section_value'] : false;
$__section_value_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['value']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_value_0_total = $__section_value_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_value'] = new Smarty_Variable(array());
if ($__section_value_0_total != 0) {
for ($__section_value_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] = 0; $__section_value_0_iteration <= $__section_value_0_total; $__section_value_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']++){
?>
				<tr>
				  <td><?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['name'];?>
</td>
				  <td><?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['email'];?>
</td>
				  <td><?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['address'];?>
</td>
				  <td><?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['city'];?>
</td>
				  <td><?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['state'];?>
</td>
				  <td><?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['feedback'];?>
</td>
				  <td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['id'];?>
">Edit</a></td>
				</tr>
				<?php
}
}
if ($__section_value_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_value'] = $__section_value_0_saved;
}
?> 
			</table>
		</div>
	</div>
</div>		
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
