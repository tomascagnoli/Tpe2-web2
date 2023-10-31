<?php
/* Smarty version 4.2.1, created on 2023-10-28 21:54:57
  from 'C:\xampp\htdocs\web2\Tpe2-web2\templates\artistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653d67117f4a13_55842964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6735643282bed8470c5755b0aa8af4faf74d5cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tpe2-web2\\templates\\artistas.tpl',
      1 => 1698518819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653d67117f4a13_55842964 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h2> Artistas de <?php echo $_smarty_tpl->tpl_vars['pais']->value;?>
 </h2>
    <table>
    <thead><tr><th>Id de artista</th><th>Artista</th><th>Cantidad de Álbumes</th></tr></thead>
    <tbody>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistas']->value, 'artista');
$_smarty_tpl->tpl_vars['artista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
$_smarty_tpl->tpl_vars['artista']->do_else = false;
?> 
        <tr>
        <td class="id_artistas"><?php echo $_smarty_tpl->tpl_vars['artista']->value->id_artista;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['artista']->value->artista;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['artista']->value->nro_albumes;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </tbody>
    </table>
<?php }
}
