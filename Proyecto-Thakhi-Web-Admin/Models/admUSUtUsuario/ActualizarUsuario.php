<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsUsuario.php");

$obj = new Usuario();

	 $datos=array();
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
		      $datos[0]=$_POST['code'];
					$datos[1]=$_POST['nombre'];
					$datos[2]=$_POST['apellido'];
          $datos[3]=$_POST['correo'];
          $datos[4]=$_POST['usuario'];
          $datos[5]=$_POST['clave'];
				  $datos[6]=$var;

					echo $obj->ActualizaUsuario($datos);



 ?>
