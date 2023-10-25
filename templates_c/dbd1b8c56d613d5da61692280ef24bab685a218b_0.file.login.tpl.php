<?php
/* Smarty version 4.2.1, created on 2023-10-24 21:47:08
  from 'C:\xampp\htdocs\Tpe2-web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65381f3c7b7651_71725868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd1b8c56d613d5da61692280ef24bab685a218b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2-web2\\templates\\login.tpl',
      1 => 1698176550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65381f3c7b7651_71725868 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="login">
    <form action='login/loguear' method="post">
        <input type="text" name="usuario" placeholder="Usuario" id="usuario">
        <input type="password" name="password" placeholder="Contraseña" id="password">
        <input id="btn-login" type="submit" value="Iniciar Sesión">
    </form>
    <div id="containerLogin">
    </div>
</section><?php }
}
