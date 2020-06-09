<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsVehiculoConductor.php");

$obj = new VehiculoConductor();


$estado=$_POST['estado'];
$var="";
if($estado=="Activo"){
   // $datos[6]="A";
   $var="A";

  }
    else {
  // code...$datos[6]="A";
  $var="I";
}

$datos=array(
$_POST['idconductor'],
$_POST['idvehiculo'],$var);
//var_dump($datos);

echo $obj->RegistrarVehiculoConductor($datos);


 ?>
