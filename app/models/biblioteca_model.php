<?php
require_once('app/controllers/biblioteca_controller.php');
    class biblioteca_model{
        
        private $db;
        
        function __construct() {
            $this->db = $db = new PDO('mysql:host=localhost;dbname=db_artistas;charset=utf8', 'root', '');
        }

        function getPaises(){
            $consulta = $this->db->prepare ('SELECT DISTINCT pais FROM artistas');
            $consulta->execute();
            $paises = $consulta->fetchAll (PDO::FETCH_OBJ);

            return $paises;
        }
        
        function getArtistas($pais){
            $consulta = $this->db->prepare("SELECT id_artista, artista, nro_albumes FROM artistas WHERE pais = ?");
            $consulta->execute([$pais]);
            $artistas = $consulta->fetchAll(PDO::FETCH_OBJ);

            return $artistas;
        }

        function getAlbumes($id){
            $consulta =  $this->db->prepare( 'SELECT * FROM albumes WHERE id_artista = ?');
            $consulta->execute([$id]);
            return $albumes = $consulta->fetchAll(PDO::FETCH_OBJ);
        }
        
        function addArtista($pais, $artista, $nro_albumes){
            $consulta = $this->db->prepare('INSERT INTO artistas(pais, artista, nro_albumes) VALUES (?, ?, ?)');
            $consulta->execute([$pais, $artista, $nro_albumes]);
            return $consulta->rowCount();
        }

        function deleteArtista($id_artista){
            $consulta = $this->db->prepare('DELETE FROM artistas WHERE id_artista=?'); 
            $consulta->execute([$id_artista]);
            return $consulta->rowCount();
        }

        function updateArtista($id_artista,$pais,$nombre_artista,$albumes){
            $consulta = $this->db->prepare('UPDATE artistas SET pais= ?,artista= ?, nro_albumes=? WHERE id_artista=?');
            $consulta->execute([$pais, $nombre_artista, $albumes, $id_artista]);
            return $consulta->rowCount();
        }

        function addAlbum($id, $album, $cantidad_canciones, $fecha){
            $consulta = $this->db->prepare ('INSERT INTO albumes(id_artista, album, nro_canciones, fecha_publicacion) VALUES (?, ?, ?, ?)');
            $consulta->execute([$id, $album, $cantidad_canciones, $fecha]);
            return $consulta->rowCount();
        }

        function deleteAlbum($id_album){
            $consulta = $this->db->prepare('DELETE FROM albumes WHERE id_album=?'); 
            $consulta->execute([$id_album]);
            return $consulta->rowCount();
        }

        function updateAlbum($id_artista, $id_album, $album, $nro_canciones, $fecha){
            $consulta = $this->db->prepare('UPDATE albumes SET id_artista= ?, album= ?, nro_canciones= ?, fecha_publicacion=? WHERE id_album=?');
            $consulta->execute([$id_artista, $album, $nro_canciones, $fecha,  $id_album]);
            return $consulta->rowCount();
        }

        function getRegistro($usuario){
            $consulta = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
            $consulta->execute([$usuario]);
            $registro = $consulta->fetch(PDO::FETCH_OBJ);
            return $registro;
        }
        
    }

