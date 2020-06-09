<?php
require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Cliente.php");

$obj = new Clientes();

	$datos=array();
  $nombreImg=$_FILES['imagen']['name'];
	$rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
	$carpeta='../../Fotos/';
	$rutaFinal=$carpeta.$nombreImg;

	$datosImg=array($nombreImg,$rutaFinal);

		if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
				$idimagen=$obj->agregaImagen($datosImg);

				if($idimagen > 0){

					$datos[0]=$_POST['dni'];
          $datos[1]=$_POST['celular'];
          $datos[2]=$_POST['clave'];
          $datos[3]=$_POST['nombre'];
        	$datos[4]=$_POST['apellido'];
					$datos[5]=$idimagen;
					$datos[6]=$_POST['correo'];
          $datos[7]=$_POST['latitud'];
          $datos[8]=$_POST['longitud'];
          $datos[9]="1";
					echo $obj->RegistrarCliente($datos);
				}else{
					echo 0;
				}

		}

 ?>
