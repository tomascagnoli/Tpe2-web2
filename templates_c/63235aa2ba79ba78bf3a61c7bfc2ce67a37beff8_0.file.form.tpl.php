<?php
/* Smarty version 4.2.1, created on 2023-10-25 07:00:02
  from 'C:\xampp\htdocs\web2\tpeWeb2\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6538a0d2eddee5_89573874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63235aa2ba79ba78bf3a61c7bfc2ce67a37beff8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeWeb2\\templates\\form.tpl',
      1 => 1698207401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footerForm.tpl' => 1,
  ),
),false)) {
function content_6538a0d2eddee5_89573874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<nav class="login">
    <a href="/web2/tpeWeb2/home">Home</a> 
</nav>
<section class="login">
        <h2>Inicio de sesion Admins</h2>  
        <form action='login/loguear' method="post">
            <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
            <input type="submit" value="Enviar">
        </form>
        <div id="containerLogin">
    
        </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footerForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
