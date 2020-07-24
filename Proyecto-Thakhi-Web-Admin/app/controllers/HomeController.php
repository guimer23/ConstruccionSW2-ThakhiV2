<?php
namespace App\Controllers;

class HomeController { 
   private $home;
     public function __construct(){
       $this->cliente = new \App\Models\Cliente;
       $this->entregas = new \App\Models\Entregas;
       $this->conductor = new \App\Models\Conductor;
       $this->vehiculo = new \App\Models\Vehiculo;
    }  

    public function index() {   
    $model = $this->cliente->listar();
    $modele = $this->entregas->listar();
    $modelc = $this->conductor->listar();
    $modelv = $this->vehiculo->listar();

        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'home/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function contadorcliente($model) {
        $contador=0;
            foreach($model as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }
  	public function contadorentregas($modele) {
        $contador=0;
            foreach($modele as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }
    public function contadorconductores($modelc) {
        $contador=0;
            foreach($modelc as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }
    public function contadorvehiculos($modelv) {
        $contador=0;
            foreach($modelv as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }


 

}