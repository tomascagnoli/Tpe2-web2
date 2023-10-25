{include file = "header.tpl"}
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
{include file = "footerForm.tpl"}