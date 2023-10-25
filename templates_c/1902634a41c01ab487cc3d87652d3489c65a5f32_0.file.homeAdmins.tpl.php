<?php
/* Smarty version 4.2.1, created on 2023-10-25 04:37:05
  from 'C:\xampp\htdocs\Tpe2-web2\templates\homeAdmins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65387f51398066_89838648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1902634a41c01ab487cc3d87652d3489c65a5f32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2-web2\\templates\\homeAdmins.tpl',
      1 => 1698201397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footeradmin.tpl' => 1,
  ),
),false)) {
function content_65387f51398066_89838648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="homeAdmins">
    <a href="/Tpe2-Web2/home">Home</a>
    <a href="login/cerrar">Cerrar Sesion</a>

    <h2>Manipulación de Datos - Biblioteca Musical</h2>

    <h3>Añadir Nuevo Artista:</h3>
    <form action="homeAdmins/addArtista" method="post">
        <label>País:</label>
        <input type="text" name="pais" ><br>

        <label>Nombre del Artista:</label>
        <input type="text" name="artista" ><br>

        <label>Cantidad de Álbumes:</label>
        <input type="number" name="nro_albumes" ><br>

        <input type="submit" value="Agregar Artista">
    </form>
    <div id="divAddArtista">

    </div>
    
    <h3>Actualizar Información del Artista por ID:</h3>
    <form action="homeAdmins/updateArtista" method="post">
        <label>ID del Artista a Actualizar:</label>
        <input type="text" name="id_artista_update" required><br>

        <label>Nuevo Nombre del Artista:</label>
        <input type="text" name="nombre_artista_update" required><br>

        <label>Nueva Cantidad de Álbumes:</label>
        <input type="text" name="albumes_artista_update" required><br>

        <label>Nuevo País:</label>
        <input type="text" name="pais_artista_update" required><br>

        <input type="submit" value="Actualizar Artista">
    </form>

    <h3>Eliminar Artista por ID:</h3>
    <form action="homeAdmins/deleteArtista" method="post">
        <label>ID del Artista a Eliminar:</label>
        <input type="text" name="id_artista_eliminar" required><br>

        <input type="submit" value="Eliminar Artista">
    </form>


    <h3>Añadir Nuevo Álbum:</h3>
    <form action="homeAdmins/addAlbum" method="post">
        <label>ID Artista:</label>
        <input type="text" name="id_artista_add" required><br>

        <label>Nombre del Álbum:</label>
        <input type="text" name="nombre_album_add" required><br>

        <label>Cantidad de Canciones:</label>
        <input type="text" name="cantidad_canciones_add" required><br>

        <label>Fecha de Publicación:</label>
        <input type="text" name="fecha_publicacion_add" required><br>

        <input type="submit" value="Agregar Álbum">
    </form>

    <h3>Actualizar Información del Álbum por ID:</h3>
    <form action="homeAdmins/updateAlbum" method="post">
        <label>ID del Álbum a Actualizar:</label>
        <input type="text" name="id_album_update" required><br>

        <label>Nuevo Nombre del Álbum:</label>
        <input type="text" name="album" required><br>

        <label>Nueva Cantidad de Canciones:</label>
        <input type="text" name="cantidad_canciones_update" required><br>

        <label>Nueva Fecha de Publicación:</label>
        <input type="text" name="fecha_publicacion_update" required><br>

        <input type="submit" value="Actualizar Artista">
    </form>

    <h3>Eliminar Álbum por ID:</h3>
    <form action="homeAdmins/deleteAlbum" method="post">
        <label>ID del Álbum a Eliminar:</label>
        <input type="text" name="id_album_eliminar" required><br>
        <input type="submit" value="Eliminar Álbum">
    </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footeradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
    <?php }
}
