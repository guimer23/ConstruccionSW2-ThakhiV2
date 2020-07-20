<?php
namespace App\Controllers;

class   MonitorearController{

    private $monitorear;
  
    private $movimientos;
    public function __construct(){
        $this->monitorear = new \App\Models\Monitorear;
      
    }
}

?>