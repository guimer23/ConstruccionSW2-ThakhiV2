<?php

	require_once "../../Controllers/admClsConexion.php";
	require_once "../../Controllers/admClsVehiculoConductor.php";

	$obj= new VehiculoConductor();
	$idart=$_POST['codigo'];

	echo json_encode($obj->ObtenDatosVehiculoConductor($idart));

 ?>
