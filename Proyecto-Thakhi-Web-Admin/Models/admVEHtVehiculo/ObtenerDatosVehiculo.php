<?php

require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsVehiculo.php");

	$obj= new Vehiculo();


	$code=$_POST['codigo'];

	echo json_encode($obj->ObtenDatosVehiculo($code));

 ?>
