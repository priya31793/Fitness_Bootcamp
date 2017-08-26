<?php
/* Smarty version 3.1.30, created on 2017-08-23 13:19:57
  from "C:\xampp\htdocs\smarty\demo\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599d64dde84b52_09947325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea9ebe54bf3971ae30fcca7d442c7e620822bd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\demo\\templates\\index.tpl',
      1 => 1503487172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_599d64dde84b52_09947325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>

</head>
<body>

   <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    id : <?php echo $_smarty_tpl->tpl_vars['contact_info']->value['u_id'];?>
 <br>
   name : <?php echo $_smarty_tpl->tpl_vars['contact_info']->value['u_name'];?>
 <br>    
   email : <?php echo $_smarty_tpl->tpl_vars['contact_info']->value['u_email'];?>
 <br>    
   phone : <?php echo $_smarty_tpl->tpl_vars['contact_info']->value['u_phone'];?>
 <br> 
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
