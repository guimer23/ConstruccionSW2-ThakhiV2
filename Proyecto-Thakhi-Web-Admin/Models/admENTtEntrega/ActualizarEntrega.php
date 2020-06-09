<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsEntregas.php");

$obj = new Entregas();


$estado=$_POST['estado'];
$var="";
if($estado=="Pendiente"){
   // $datos[6]="A";
   $var="P";

  }
  else if ($estado=="Entregado") {
       $var="E";
  }
    else {
  // code...$datos[6]="A";
  $var="N";
}
	       $datos=array();
         $datos[0]=$_POST['code'];
         $datos[1]=$_POST['descripcion'];
         $datos[2]=$_POST['tipo'];
         $datos[3]=$_POST['conductor'];
         $datos[4]=$_POST['fecha'];
         $datos[5]=$_POST['cliente'];
         $datos[6]=$_POST['precio'];
         $datos[7]=$var;

					echo $obj->ActualizaEntrega($datos);


 ?>
