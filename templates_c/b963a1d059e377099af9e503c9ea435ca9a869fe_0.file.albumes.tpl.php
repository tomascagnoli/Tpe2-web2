<?php
/* Smarty version 4.2.1, created on 2023-10-28 22:04:08
  from 'C:\xampp\htdocs\web2\Tpe2-web2\templates\albumes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653d6938ad5357_88128394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b963a1d059e377099af9e503c9ea435ca9a869fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tpe2-web2\\templates\\albumes.tpl',
      1 => 1698523444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653d6938ad5357_88128394 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h2>Los mejores albumes </h2> 
    <table class="tableAlbumes">
    <thead><tr><th>Id del artista</th><th>Album</th><th>Cantidad de canciones</th><th>Fecha de publicacion</th></tr></thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albumes']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?> 
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['album']->value->id_artista;?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['album']->value->album;?>
  </td>
        <td><?php echo $_smarty_tpl->tpl_vars['album']->value->nro_canciones;?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['album']->value->fecha_publicacion;?>
 </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table><?php }
}
