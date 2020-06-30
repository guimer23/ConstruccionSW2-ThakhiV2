<?php
namespace App\Controllers;

class   ClienteController{

    private $cliente;
      public function __construct(){
        $this->cliente = new \App\Models\Cliente;
      
    }
    //Controlador Index Cliente
    public function index() {
        $model = $this->cliente->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'cliente/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    //Controlador Agreagr cliente
    public function agregar() {
  
  
        if(!empty($_GET['id'])) {
            $model = $this->cliente->obtener($_GET['id']);
        }

        $nuevo = empty($model->CLIdni);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'cliente/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

}

?>