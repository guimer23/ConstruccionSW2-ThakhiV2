<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsEntregas.php");

$obj = new Entregas();

	$datos=array();

	$estado=$_POST['estado'];
	$var="";
	if($estado=="Pendiente"){
		 // $datos[6]="A";
		 $var="P";

		}
			else {
		// code...$datos[6]="A";
		$var="P";
	}

					$datos[0]=$_POST['descripcion'];
					$datos[1]=$_POST['tipo'];
          $datos[2]=$_POST['conductor'];
          $datos[3]=$_POST['fecha'];
          $datos[4]=$_POST['cliente'];
          $datos[5]=$_POST['precio'];
          $datos[6]=$var;
					$datos[7]=1;

					echo $obj->RegistroEntrega($datos);


 ?>
