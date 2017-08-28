<?php
/* Smarty version 3.1.30, created on 2017-08-28 06:11:22
  from "C:\xampp\htdocs\week6\demo\templates\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a397ea1a1996_08566458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de47fe5ded2a5598d1003c4ee19631e389d96c17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\week6\\demo\\templates\\edit.tpl',
      1 => 1503893480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59a397ea1a1996_08566458 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
			<form name="form1" method="post" action="update.php">
				<h2>  
					<span class="red"><strong>Update Your Info</strong></span>
				</h2>
				<?php
$__section_value_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_value']) ? $_smarty_tpl->tpl_vars['__smarty_section_value'] : false;
$__section_value_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['value']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_value_0_total = $__section_value_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_value'] = new Smarty_Variable(array());
if ($__section_value_0_total != 0) {
for ($__section_value_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] = 0; $__section_value_0_iteration <= $__section_value_0_total; $__section_value_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']++){
?>
					<label for="Name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your Name..." value="<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['name'];?>
">
					<label for="Email">Email</label>
					<input type="email" id="email" name="email" placeholder="Enter your Email..." value="<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['email'];?>
">
					<label for="Address">Address</label>
					<input type="text" id="address" name="address" placeholder="Enter your Address..." value="<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['address'];?>
">
					<label for="City">City</label>
					<input type="text" id="city" name="city" placeholder="Enter your City..." value="<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['city'];?>
">
					<label for="State">State</label>
					<input type="text" id="state" name="state" placeholder="Enter your State..." value="<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['state'];?>
">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['value']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_value']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_value']->value['index'] : null)]['id'];?>
">
					<button type="submit" name="update" value="update">Update</button>				
				<?php
}
}
if ($__section_value_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_value'] = $__section_value_0_saved;
}
?>
			</form>
		</div>
		</div>
    </div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
