<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsCliente.php");

$obj = new Clientes();

	       $datos=array();

					$datos[0]=$_POST['dnicliente'];
          $datos[1]=$_POST['nombre'];
          $datos[2]=$_POST['apellido'];
          $datos[3]=$_POST['celularcliente'];
        	$datos[4]=$_POST['correo'];
					$datos[5]=$_POST['clave'];

					echo $obj->ActualizaCliente($datos);


 ?>
