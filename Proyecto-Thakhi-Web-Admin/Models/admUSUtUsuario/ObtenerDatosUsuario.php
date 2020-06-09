<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsUsuario.php");

$obj= new Usuario();


echo json_encode( $obj->ObtenDatosUsuario($_POST['codigo']));

 ?>
