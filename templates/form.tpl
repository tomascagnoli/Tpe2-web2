{include file = "headerLogin.tpl"}
<section class="containerlogin">
        <div class="formLogin">
            <h1>Inicio de sesion Admins</h1>  
            <form action='login/loguear' method="post">
                <h3>Logueate</h3>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                <input type="submit" value="Enviar">
            </form>
        </div>
</section>
{include file = "footerForm.tpl"}