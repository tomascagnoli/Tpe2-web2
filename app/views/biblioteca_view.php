<?php
require_once('app/controllers/biblioteca_controller.php');
require_once('./libs/smarty/Smarty.class.php');
class biblioteca_View {
    private $smarty;

    public function __construct() {
        $this->smarty = new smarty();
    }

    function showHome(){
        $this->smarty->display('templates/home.tpl');
    }

    function showForm(){
        $this->smarty->display('templates/form.tpl');
    }

    function showPaises($paises){
        $this->smarty->assign("paises", $paises);
        $this->smarty->display('templates/paises.tpl');
    }

    function showArtistas($artistas, $pais){
        $this->smarty->assign("artistas", $artistas);
        $this->smarty->assign("pais", $pais);
        $this->smarty->display('templates/artistas.tpl');
    }

    function showAlbumes($albumes){
        $this->smarty->assign("albumes", $albumes);
        $this->smarty->display('templates/albumes.tpl');
    }

    function showHomeAdmins(){
        $this->smarty->display('templates/homeAdmins.tpl');
    }

    function showOk(){
        $this->smarty->display('templates/ok.tpl');
    }
    
    function showError($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/error.tpl');
    }
}  