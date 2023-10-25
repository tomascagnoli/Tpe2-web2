<?php
/* Smarty version 4.2.1, created on 2023-10-25 06:55:42
  from 'C:\xampp\htdocs\web2\tpeWeb2\templates\paises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65389fcef36426_25327374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ab5551d15b5a32d26879ef6d5fa687e1cf743b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeWeb2\\templates\\paises.tpl',
      1 => 1698209741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65389fcef36426_25327374 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <a href="login/modificar">Modificar Informacion</a>



    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'paisActual');
$_smarty_tpl->tpl_vars['paisActual']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paisActual']->value) {
$_smarty_tpl->tpl_vars['paisActual']->do_else = false;
?> 
            <li class="paises"><?php echo $_smarty_tpl->tpl_vars['paisActual']->value->pais;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
