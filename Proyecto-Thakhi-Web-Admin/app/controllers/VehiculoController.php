<?php
namespace App\Controllers;

class   VehiculoController{

    private $vehiculo;    
    private $estado;

    public function __construct(){
        $this->vehiculo = new \App\Models\Vehiculo;
        $this->estado=new \App\Models\Estados;
    }
    
    public function index() {
        $model = $this->vehiculo->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
}

?>