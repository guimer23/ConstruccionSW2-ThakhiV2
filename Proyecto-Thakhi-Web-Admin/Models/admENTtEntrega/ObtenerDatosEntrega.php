<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsEntregas.php");

$obj = new Entregas();

	$idart=$_POST['id'];

	echo json_encode($obj->ObtenDatosEntrega($idart));

 ?>
