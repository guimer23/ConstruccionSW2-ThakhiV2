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

}

?>