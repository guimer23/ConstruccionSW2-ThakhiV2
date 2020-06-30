<?php
namespace App\Controllers;

class   ConductorController{

    private $conductor;
    private $estado;


    public function __construct(){
        $this->conductor = new \App\Models\Conductor;
        $this->estado=new \App\Models\Estados;
      
    }
    
    public function index() {
        $model = $this->conductor->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'conductor/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function agregar() {
        $estados = $this->estad->listar();
  
        if(!empty($_GET['id'])) {
            $model = $this->conductor->obtener($_GET['id']);
        }

        $nuevo = empty($model->CONdni);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'conductor/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

}

?>