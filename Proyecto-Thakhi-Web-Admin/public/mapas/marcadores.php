<?php

  // Archivo de Conexión a la Base de Datos
  include('conexion.php');

  //require_once("../Proyecto-Thakhi-Web-Admin/public/mapas/conexion.php");
  $c = new Conectar();
  $conexion = $c->conexion();
 //Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
$result = mysqli_query($conexion, "SELECT vhi.CONdni,vhi.VEClatitud,vhi.VEClongitud,co.CONnombre,vhi.VEHid FROM admvectvehiculo_conductor as vhi
  inner join admcontconductor as co
  on vhi.CONdni=co.CONdni
  inner join admenttentrega as ent
  on ent.VECid=vhi.VECid
  where ent.ENTfechahora=curdate()");
  //  $result = mysqli_query($con, "SELECT * FROM admvectvehiculo_conductor");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng
  while ($row = mysqli_fetch_array($result)) {
      echo '["' . $row['CONdni'] . '", '.$row['VEClatitud'].','.$row['VEClongitud']. ','.$row['VEHid'].  '],';


  //  echo '["' . $row['CONdni'] . '", ' . $row['VEClatitud'] . ', ' . $row['VEClongitud'] . '],';
  }

?>