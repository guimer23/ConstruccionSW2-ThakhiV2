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
    
?>