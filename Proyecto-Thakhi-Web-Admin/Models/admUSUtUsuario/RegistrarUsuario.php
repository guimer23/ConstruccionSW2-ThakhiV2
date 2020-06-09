<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsUsuario.php");

$obj = new Usuario();

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
					$datos[0]=$_POST['nombre'];
					$datos[1]=$_POST['apellido'];
          $datos[2]=$_POST['correo'];
          $datos[3]=$_POST['usuario'];
          $datos[4]=$_POST['clave'];


         //estado
				 $datos[5]=$var;
					$datos[6]=$idimagen;
					echo $obj->RegistrarUsuario($datos);
				}else{
					echo 0;
				}

		}


 ?>
