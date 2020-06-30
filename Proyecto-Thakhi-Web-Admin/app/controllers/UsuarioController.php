<?php
namespace App\Controllers;

class   UsuarioController{

    private $usuario;
    private $estado;

    public function __construct(){
        $this->usuario = new \App\Models\Usuario;
        $this->estado=new \App\Models\Estados;
      
    }
    //Meotodo index UsuarioController
    public function index() {        
        $model = $this->usuario->listar();        
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'usuario/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }  

    //Metodo agregar UsuarioController
    public function agregar() {   
        $estados = $this->estado->listar();
        if(!empty($_GET['id'])) {
            $model = $this->usuario->obtener($_GET['id']);
        }
        $nuevo = empty($model->USUid);

        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'usuario/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

}

?>