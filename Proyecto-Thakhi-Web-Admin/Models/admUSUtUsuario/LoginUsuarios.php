<?php

session_start();

require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsUsuario.php");

$obj = new Usuario();


$datos= array($usu=$_POST['usu'],$_POST['userpassword']);
echo $obj->Login($datos);

 ?>
