<?php
/* Smarty version 4.2.1, created on 2023-10-25 06:54:45
  from 'C:\xampp\htdocs\web2\tpeWeb2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65389f95411675_15647364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2826b1067e24b8f475163919c11cd361c7bfb1b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeWeb2\\templates\\error.tpl',
      1 => 1698207391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65389f95411675_15647364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2/tpeWeb2/homeAdmins">Volver</a> 
<h2>Error: <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
