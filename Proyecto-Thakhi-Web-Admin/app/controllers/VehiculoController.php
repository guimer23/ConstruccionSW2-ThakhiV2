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

    public function agregar() {  
  
        $estados = $this->estado->listar();

        if(!empty($_GET['id'])) {
            $model = $this->vehiculo->obtener($_GET['id']);
        }

        $nuevo = empty($model->VEHid);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
}

?>