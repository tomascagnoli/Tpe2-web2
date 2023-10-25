<?php
/* Smarty version 4.2.1, created on 2023-10-25 01:23:46
  from 'C:\xampp\htdocs\Tpe2-web2\templates\paises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65385202ced253_19733967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e3292ff4a44cefd5bd7cd22dd5af61d30762d38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2-web2\\templates\\paises.tpl',
      1 => 1698189784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65385202ced253_19733967 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="login/modificar">Modificar Informacion</a>
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
</ul><?php }
}
