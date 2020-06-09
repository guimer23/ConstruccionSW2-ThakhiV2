<?php

	require_once "../../Controllers/admClsConexion.php";
	require_once "../../Controllers/admClsConductor.php";

	$obj= new Conductores();
	$idart=$_POST['codigo'];

	echo json_encode($obj->obtenDatosConductor($idart));
	

 ?>
