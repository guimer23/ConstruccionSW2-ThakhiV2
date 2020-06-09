<?php

	require_once "../../Controllers/admClsConexion.php";
  require_once ("../../Controllers/admClsCliente.php");

  $obj = new Clientes();

	$idart=$_POST['dni'];

	echo json_encode($obj->obtenDatosCliente($idart));

 ?>
