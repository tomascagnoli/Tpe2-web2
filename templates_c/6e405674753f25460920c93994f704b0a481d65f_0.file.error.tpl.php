<?php
/* Smarty version 4.2.1, created on 2023-10-24 18:49:59
  from 'C:\xampp\htdocs\Tpe2-web2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6537f5b70a7d31_31845751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e405674753f25460920c93994f704b0a481d65f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2-web2\\templates\\error.tpl',
      1 => 1698166187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6537f5b70a7d31_31845751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Error: <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
