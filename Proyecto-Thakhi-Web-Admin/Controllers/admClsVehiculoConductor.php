<?php

class VehiculoConductor
{


    public function RegistrarVehiculoConductor($datos)
    {
    
      $c= new Conectar();
      $conexion=$c->conexion();
      $sql="INSERT INTO admvectvehiculo_conductor (condni,VEHid,VECestado)
      values('$datos[0]',
            '$datos[1]',
            '$datos[2]')";

        return mysqli_query($conexion,$sql);
    }
    public function ObtenDatosVehiculoConductor($codigo){

          $c= new Conectar();
          $conexion=$c->conexion();
          $sql="SELECT adm.VECid,con.CONdni,con.CONnombre,con.CONapellido,mo.VEHid, mo.VEHplaca,mo.VEHmarca,adm.VECestado from admvectvehiculo_conductor  as adm
          inner join admcontconductor as con
         on con.CONdni=adm.CONdni
         inner join admvehtvehiculo as mo
         on adm.VEHid= mo.VEHid
          where adm.VECid='$codigo'";

          $resultado =mysqli_query($conexion,$sql);
          $ver=mysqli_fetch_row($resultado);
          $datos=array(
            'codigo'=>$ver[0],
            'dni'=>$ver[1],
            'nombre'=>$ver[2],
            'apellido'=>$ver[3],
            'idvehiculo'=>$ver[4],
            'placa'=>$ver[5],
            'marca'=>$ver[6],
            'estado'=> $ver[7]
              );

          return $datos;

    }
    public function ActualizarVehiculoConductor($datos) {

      $c= new Conectar();
      $conexion=$c->conexion();

      $sql ="UPDATE admvectvehiculo_conductor
      SET CONdni='$datos[1]',
          VEHid ='$datos[2]',
          VECestado ='$datos[3]'
      where VECid='$datos[0]'";
    //CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto
    return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);

    }

}



 ?>
