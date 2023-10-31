<?php
/* Smarty version 4.2.1, created on 2023-10-31 03:58:55
  from 'C:\xampp\htdocs\web2\Tpe2-web2\templates\homeAdmins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65406d6f092586_76223468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab428ff3212d8730366a05b5ba873b19ecc9a50c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tpe2-web2\\templates\\homeAdmins.tpl',
      1 => 1698721127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmins.tpl' => 1,
    'file:footeradmin.tpl' => 1,
  ),
),false)) {
function content_65406d6f092586_76223468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmins.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class = "containerAdmins">
        <h1>Manipulación de Datos - Biblioteca Musical</h1>
        <div class="containerForms">
            <div class="formAddArtista">
                <form action="homeAdmins/addArtista" method="post" id="addartista">
                    <h3>Añadir Nuevo Artista</h3>
                    <input type="text" name="pais" placeholder="Paìs" required><br>
                    <input type="text" name="artista" placeholder="Nombre del artista" required><br>
                    <input type="number" name="nro_albumes" placeholder="Cantidad de albumes" required><br>
            
                    <input type="submit" value="Agregar Artista">
                </form>
            </div>
            <div class="formUpdateArtista">
                <form action="homeAdmins/updateArtista" method="post" id="updateartista">
                    <h3>Actualizar Artista por ID</h3>
                    <input type="text" name="id_artista_update" placeholder="ID del artista a actualizar" required><br>
                    <input type="text" name="nombre_artista_update" placeholder="Nuevo nombre del artista" required><br>
                    <input type="text" name="albumes_artista_update" placeholder="Nueva cantidad de albumes" required><br>
                    <input type="text" name="pais_artista_update" placeholder="Nuevo pais" required><br>
                
                    <input type="submit" value="Actualizar Artista">
                </form>
            </div>
            <div class="formDeleteArtista">
                <form action="homeAdmins/deleteArtista" method="post" id="deleteartista">
                    <h3>Eliminar artista por ID</h3>
                    <input type="text" name="id_artista_eliminar" placeholder="ID del artista a eliminar" required><br>
            
                    <input type="submit" value="Eliminar Artista" id="submitdelete">
                </form>
            </div>
            <div class="formAddAlbum">
                <form action="homeAdmins/addAlbum" method="post" id="addalbum">
                    <h3>Añadir Nuevo Álbum</h3>
                    <input type="text" name="id_artista_add" placeholder="ID artista" required><br>
                    <input type="text" name="nombre_album_add" placeholder="Nombre del album" required><br>
                    <input type="text" name="cantidad_canciones_add" placeholder="Cantidad de canciones" required><br>
                    <input type="text" name="fecha_publicacion_add" placeholder="Fecha de publicacion" required><br>
            
                    <input type="submit" value="Agregar Álbum">
                </form>
            </div>
            <div class="formUpdateAlbum">
                <form action="homeAdmins/updateAlbum" method="post" id="updatealbum">
                    <h3>Actualizar Álbum por ID</h3>
                    <input type="text" name="id_album_update" placeholder="ID del album a actualizar" required><br>
                    <input type="text" name="album" placeholder="Nuevo nombre del album" required><br>
                    <input type="text" name="cantidad_canciones_update" placeholder="Nueva cantidad de canciones"><br>
                    <input type="text" name="fecha_publicacion_update" placeholder="Nueva fecha de publicacion" required><br>
            
                    <input type="submit" value="Actualizar Artista">
                </form>
            
            </div>
            <div class="formDeleteAlbum">
                <form action="homeAdmins/deleteAlbum" method="post" id="deletealbum">
                    <h3>Eliminar Álbum por ID</h3>
                    <input type="text" name="id_album_eliminar" placeholder="ID del album a eliminar" required><br>
                    <input type="submit" value="Eliminar Álbum" id="submitdelete">
                </form>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footeradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
