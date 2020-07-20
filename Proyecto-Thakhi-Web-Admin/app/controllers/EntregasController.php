<?php
namespace App\Controllers;

class   EntregasController{

    private $cliente;
    private $conductor;
    private $entregas;
    private $vehiculo_conductor;

    public function __construct(){
        $this->entregas = new \App\Models\Entregas;
        $this->conductor=new \App\Models\Conductor;
        $this->cliente=new \App\Models\Cliente;
        $this->vehiculo_conductor=new \App\Models\VehiculoConductor;
    }
    public function index() {
        $model = $this->entregas->listar();
      
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'entregas/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    public function agregar() {       
        //$conductores=$this->conductor->listar();
          $clientes = $this->cliente->listar();  
          $vehiculoconductor=$this->vehiculo_conductor->listar(); 
  
         require_once _VIEW_PATH_ . 'header.php';
          require_once _VIEW_PATH_ .'entregas/agregar.php';
          require_once _VIEW_PATH_ . 'footer.php';
      }

}

?>