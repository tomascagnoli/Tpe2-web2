<?php
    include_once('app/views/biblioteca_view.php');
    include_once('app/models/biblioteca_model.php');
    
    class biblioteca_controller{

        private $model;
        private $view;
        

        function __construct(){
            $this->model= new biblioteca_model();
            $this->view= new biblioteca_view();
        }

        function error($error=null){
            $this->view->showError($error);
        }

        public function showHome(){
            $this->view->showHome();
        }
        
        public function showHomeAdmins(){
            $this->view->showHomeAdmins();
        }

        public function showForm(){
            $this->view->showForm();
        }

        public function showPaises(){
            $paises= $this->model->getPaises();
            $this->view->showPaises($paises);
        }

        public function showArtistas($pais){
            $artistas= $this->model->getArtistas($pais);
            if (!empty($artistas)) {
                $this->view->showArtistas($artistas,$pais);
            }else{
                $this->view->showError(' Campos de ingreso vacio');
            }
        }

        public function showAlbumes($id){
            $albumes = $this->model->getAlbumes($id);
            $this->view->showAlbumes($albumes);
        }

        public function validateAddArtista(){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_REQUEST['pais']) && isset($_REQUEST['artista'])){
                    $pais = $_REQUEST['pais'];
                    $artista = $_REQUEST['artista'];
                    $nro_albumes = $_REQUEST['nro_albumes'];
                    if(strlen($pais>4) && strlen($artista>4)){
                        $num_filas= $this->model->addArtista($pais,$artista,$nro_albumes);
                        if($num_filas==1){
                            $this->view->showOk();
                        }
                        else{
                            $this->view->showError(' No se ha realizado correctamente');
                        }
                    }else{
                        $this->view->showError(' Longitud de ingresos incorrecta');
                    }
                }else{
                    $this->view->showError(' Campos de ingreso vacio');
                }
            }
        }
        
        public function validateDeleteUser(){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_REQUEST['id_artista_eliminar'])){
                    $id_artista = $_REQUEST['id_artista_eliminar'];
                    $num_filas=$this->model->deleteArtista($id_artista);
                    if ($num_filas == 1) {
                        $this->view->showOk();
                    }else{
                        $this->view->showError(' No se ha realizado correctamente');
                    }
                }else{
                    $this->view->showError(' Campos de ingreso vacio');
                }
            }
        }

        public function validateUpdateArtista(){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_REQUEST['id_artista_update']) && isset($_REQUEST['nombre_artista_update']) && isset($_REQUEST['albumes_artista_update']) && isset($_REQUEST['pais_artista_update'])){
                    $id_artista = $_REQUEST['id_artista_update'];
                    $pais = $_REQUEST['pais_artista_update'];
                    $nombre_artista = $_REQUEST['nombre_artista_update'];
                    $albumes = $_REQUEST['albumes_artista_update'];
                    $num_filas = $this->model->updateArtista($id_artista,$pais,$nombre_artista,$albumes);
                    if($num_filas==1){
                        $this->view->showOk();
                    }else{
                        $this->view->showError(' No se ha realizado correctamente');
                    }
                }else{
                    $this->view->showError(' Campos de ingreso vacio');
                }
            }   
        }

        function validateAddAlbum(){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_REQUEST['id_artista_add']) && isset($_REQUEST['nombre_album_add']) && isset($_REQUEST['cantidad_canciones_add']) && isset($_REQUEST['fecha_publicacion_add'])){
                    $id = $_REQUEST['id_artista_add'];
                    $album = $_REQUEST['nombre_album_add'];
                    $cantidad_canciones = $_REQUEST['cantidad_canciones_add'];
                    $fecha = $_REQUEST['fecha_publicacion_add'];
                    $num_filas= $this->model->addAlbum($id,$album,$cantidad_canciones,$fecha);
                    if($num_filas==1){
                        $this->view->showOk();
                    }else{
                        $this->view->showError(' No se ha realizado correctamente');
                    }
                }else{
                    $this->view->showError(' Campos de ingreso vacio');
                }
            }
        }

        function validateDeleteAlbum(){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_REQUEST['id_album_eliminar'])){
                    $id_album = $_REQUEST['id_album_eliminar'];
                    $num_filas= $this->model->deleteAlbum($id_album);
                    if ($num_filas == 1) {
                        $this->view->showOk();
                    }else{
                        $this->view->showError(' No se ha realizado correctamente');
                    }
                }else{
                    $this->view->showError(' Campos de ingreso vacio');
                }
        
            }
        }

        function validateUpdateAlbum(){
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_REQUEST['id_artista']) && isset($_REQUEST['id_album_update']) && isset($_REQUEST['album']) && isset($_REQUEST['cantidad_canciones_update']) && isset($_REQUEST['fecha_publicacion_update'])){
                    $id_artista = $_REQUEST['id_artista'];
                    $id_album = $_REQUEST['id_album_update'];
                    $album = $_REQUEST['album'];
                    $nro_canciones = $_REQUEST['cantidad_canciones_update'];
                    $fecha = $_REQUEST['fecha_publicacion_update'];
                    $num_filas= $this->model->updateAlbum($id_artista, $id_album, $album, $nro_canciones, $fecha);
                    if($num_filas==1){
                        $this->view->showOk();
                    }else{
                        $this->view->showError(' No se ha realizado correctamente');
                    }
                }else{
                    $this->view->showError(' Campos de ingreso vacio');
                }
            }
        }
        
        public function validateRegistro($orden = null){
            if($orden=='modificar'){
                session_start();
                if($_SESSION['logueado']){
                    header("Location: /web2/Tpe2-web2/homeAdmins");
                    die();
                }else{
                    header("Location: /web2/Tpe2-web2/form");
                    die();
                }
            }elseif($orden=='cerrar'){
                session_start();
                session_destroy();
                header("Location: /web2/Tpe2-web2/home");
                die();
            }else{
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    if(isset($_REQUEST['usuario']) && isset($_REQUEST['password'])){
                        $usuario = $_REQUEST['usuario'];
                        $password = $_REQUEST['password'];
                        $registro = $this->model->getRegistro($usuario);
                        if ($registro && password_verify($password, ($registro->password))) {
                            session_start();
                            $_SESSION['usuario'] = $usuario;
                            $_SESSION['logueado'] = true;
                            header("Location: /web2/Tpe2-web2/homeAdmins");
                            die();
                        } else {
                            $this->view->showError(' Usuario o contraseña incorrectos');
                        }
                    }
                } 
            }
        }      
}
            
    
             