<?php
/* Smarty version 4.2.1, created on 2023-10-31 04:50:05
  from 'C:\xampp\htdocs\web2\Tpe2-web2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6540796dbfd930_86375617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c60e4213936799cb02bbd59de1bd83aa1fe07d7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tpe2-web2\\templates\\error.tpl',
      1 => 1698724186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6540796dbfd930_86375617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2/Tpe2-Web2/homeAdmins">Volver</a> 
<h2>Error: <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
