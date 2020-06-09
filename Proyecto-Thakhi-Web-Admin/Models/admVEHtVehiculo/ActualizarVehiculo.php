<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsVehiculo.php");

$obj = new Vehiculo();


$datos=array();
$nombreImg=$_FILES['imagen']['name'];
$rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
$carpeta='../../Fotos/';
$rutaFinal=$carpeta.$nombreImg;

$datosImg=array($nombreImg,$rutaFinal);

  if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
      $idimagen=$obj->agregaImagen($datosImg);

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
      if($idimagen > 0){

        $datos[0]=$_POST['es'];
        $datos[1]=$_POST['placa'];
        $datos[2]=$_POST['marca'];
        $datos[3]=$_POST['modelo'];
        $datos[4]=$_POST['color'];
        $datos[5]=$_POST['ano'];
        $datos[6]=$_POST['soat'];
        $datos[7]=$var;
        $datos[8]=$idimagen;


    //    $datos[0]=$_POST['placa'];
      //  $datos[1]=$_POST['marca'];
      //  $datos[2]=$_POST['modelo'];
      //  $datos[3]=$_POST['color'];
      //  $datos[4]=$_POST['ano'];
      //  $datos[5]=$_POST['soat'];
      //  $datos[6]=$var;
      //  $datos[7]=$idimagen;

        echo $obj->ActualizaVehiculo($datos);
      }else{
        echo 0;
      }

  }

/*
$estado=$_POST['estado'];
$var="";
if($estado=="Activo"){
 // $datos[6]="A";
 $var="A";
}
  else {

$var="I";
}
	$datos=array();
  $datos[0]=$_POST['es'];
  $datos[1]=$_POST['placa'];
  $datos[2]=$_POST['marca'];
  $datos[3]=$_POST['modelo'];
  $datos[4]=$_POST['color'];
  $datos[5]=$_POST['ano'];
  $datos[6]=$_POST['soat'];
  $datos[7]=$var;
	echo $obj->ActualizaVehiculo($datos);
  */

 ?>
