<?php
namespace App\Controllers;
class   VehiculoConductorController{

    private $vehiculo_conductor;
    private $conductor;
    private $vehiculo;

    public function __construct(){
        $this->vehiculo_conductor = new \App\Models\VehiculoConductor;
        $this->conductor=new \App\Models\Conductor;
        $this->vehiculo=new \App\Models\Vehiculo;
    }
       public function index() {
        $model = $this->vehiculo_conductor->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo_conductor/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
      public function agregar() {  
      //  $conductores = new \App\Models\Conductor;
      $conductores=$this->conductor->listar();
     //   $model2 = new \App\Models\Vehiculo;
        $vehiculos = $this->vehiculo->listar();
        if(!empty($_GET['id'])) {
            $model = $this->vehiculo_conductor->obtener($_GET['id']);
        }

        $nuevo = empty($model->VECid);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo_conductor/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

}

?>