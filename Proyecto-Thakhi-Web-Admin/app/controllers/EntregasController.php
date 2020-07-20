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


}

?>