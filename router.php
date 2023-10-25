<?php
include_once('app/controllers/biblioteca_controller.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        if(isset($params[3])){
            $controller = new biblioteca_controller();
            $controller->showAlbumes($params[3]);
            break;
        }
        elseif(isset($params[2])){
            $controller = new biblioteca_controller;
            $controller-> showArtistas($params[2]);
            break;
        }
        elseif(isset($params[1])){
            $controller = new biblioteca_controller;
            $controller-> showPaises();
            break;
        }else{
            $controller = new biblioteca_controller;
            $controller-> showHome();
            break;
        }
        break;
    case 'homeAdmins':
        if(isset($params[1])){
            if($params[1]=='addArtista'){
                $controller = new biblioteca_controller;
                $controller-> validateAddArtista();
                break;
            }elseif($params[1]=='deleteArtista'){
                $controller = new biblioteca_controller;
                $controller-> validateDeleteUser();
                break;
            }elseif($params[1]=='updateArtista'){
                $controller = new biblioteca_controller;
                $controller-> validateUpdateArtista();
                break;
            }elseif($params[1]=='addAlbum'){
                $controller = new biblioteca_controller;
                $controller-> validateAddAlbum();
                break;
            }elseif($params[1]=='deleteAlbum'){
                $controller = new biblioteca_controller;
                $controller-> validateDeleteAlbum();
                break;
            }elseif($params[1]=='updateAlbum'){
                $controller = new biblioteca_controller;
                $controller-> validateUpdateAlbum();
                break;
            }
        }else{
            $controller = new biblioteca_controller;
            $controller-> showHomeAdmins();
            break;
        }
    case 'login':
        if(isset($params[1])){
            if($params[1]=='modificar'){
                $controller = new biblioteca_controller;
                $controller-> validateRegistro($params[1]);
                break;
            }elseif($params[1]=='cerrar'){
                $controller = new biblioteca_controller;
                $controller-> validateRegistro($params[1]);
                break;
            }else{
                $controller = new biblioteca_controller;
                $controller-> validateRegistro();
                break;
            }
        }
    case 'form':
        $controller = new biblioteca_controller;
        $controller-> showForm();
        break;
    default:
        $controller = new biblioteca_controller;
        $controller-> error(' 404 not found');
        break;
}