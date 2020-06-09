<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsCliente.php");

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

					$datos[0]=$_POST['dnicliente'];
          $datos[1]=$_POST['nombre'];
          $datos[2]=$_POST['apellido'];
          $datos[3]=$_POST['celularcliente'];
        	$datos[4]=$_POST['correo'];
					$datos[5]=$_POST['clave'];
					$datos[6]=$idimagen;
					echo $obj->RegistrarCliente($datos);
				}else{
					echo 0;
				}

		}

 ?>
