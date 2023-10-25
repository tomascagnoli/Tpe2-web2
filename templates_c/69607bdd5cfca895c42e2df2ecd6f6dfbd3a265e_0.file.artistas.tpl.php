<?php
/* Smarty version 4.2.1, created on 2023-10-25 01:56:36
  from 'C:\xampp\htdocs\Tpe2-web2\templates\artistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653859b4299fa4_14756527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69607bdd5cfca895c42e2df2ecd6f6dfbd3a265e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2-web2\\templates\\artistas.tpl',
      1 => 1698191794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653859b4299fa4_14756527 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2> Artistas de <?php echo $_smarty_tpl->tpl_vars['pais']->value;?>
 </h2>
<div class="artistas-container">
    <table>
    <thead><tr><th>Artista</th><th>Cantidad de Álbumes</th></tr></thead>
    <tbody>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?> 
        <tr>
        <td class="artistas"><?php echo $_smarty_tpl->tpl_vars['artista']->value->artista;?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['artista']->value->nro_albumes;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </tbody>
    </table>
</div><?php }
}
