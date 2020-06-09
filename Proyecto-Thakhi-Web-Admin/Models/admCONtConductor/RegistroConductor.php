<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsConductor.php");

$obj = new Conductores();

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

				$var="I";
			}
				if($idimagen > 0){

					$datos[0]=$_POST['dni'];
					$datos[1]=$_POST['nombre'];
					$datos[2]=$_POST['apellidos'];
					$datos[3]=$_POST['licencia'];
					$datos[4]=$_POST['vigencia'];
					$datos[5]=$_POST['celular'];
					$datos[6]=$_POST['correo'];
					$datos[7]=$_POST['clave'];
						$datos[8]=$_POST['direccion'];
					  $datos[9]=$var;
					$datos[10]=$idimagen;
					echo $obj->RegistrarConductor($datos);
				}else{
					echo 0;
				}

		}

 ?>
