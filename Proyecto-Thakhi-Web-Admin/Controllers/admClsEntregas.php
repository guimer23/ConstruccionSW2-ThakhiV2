<?php

class Entregas
{

  public function agregaImagen($datos){
      $c=new Conectar();
      $conexion=$c->conexion();

      $fecha=date('Y-m-d');

        $sql="INSERT into admimgtimagen (
                      IMGnombre,
                      IMGruta,
                      IMGfechaSubida)
                values ('$datos[0]',
                    '$datos[1]',
                    '$fecha')";
      $result=mysqli_query($conexion,$sql);
      return mysqli_insert_id($conexion);
    }

  public function RegistroEntrega($datos)
  {
    $fecha=date('Y-m-d');

    $c= new Conectar();
    $conexion=$c->conexion();
    $sql="INSERT INTO admenttentrega (entdescripcion,enttipo,VECid,ENTfechahora,CLIdni,ENTprecio,ENTestado,ENTfoto)
    values( '$datos[0]',
            '$datos[1]',
            '$datos[2]',
            '$datos[3]',
            '$datos[4]',
            '$datos[5]',
            '$datos[6]',
            '$datos[7]')";

      return mysqli_query($conexion,$sql);
  }
  public function ObtenDatosEntrega($codigo){
        $c= new Conectar();
        $conexion=$c->conexion();

        $sql ="SELECT d.ENTid, d.entdescripcion,d.enttipo,d.VECid, c.CONnombre,d.ENTfechahora,d.CLIdni, cli.CLInombre,d.ENTprecio,d.ENTestado,img.IMGruta from admenttentrega as d
        inner join  admimgtimagen as img
        on d.ENTfoto=img.IMGid

        inner join admvectvehiculo_conductor as co
        on d.VECid=co.VECid
        inner join admcontconductor as c
        on co.CONdni=c.CONdni
        inner join admclitcliente as cli
        on d.CLIdni=cli.CLIdni
        where d.ENTid='$codigo'";

        $resultado=mysqli_query($conexion,$sql);
        $ver=mysqli_fetch_row($resultado);

        $datos=array(
          'id'=>$ver[0],
          'descripcion'=>$ver[1],
          'tipo'=>$ver[2],
          'idvehiculo'=>$ver[3],
          'nombreconductor'=>$ver[4],
          'fecha'=>$ver[5],
          'clidni'=>$ver[6],
          'clinombre'=>$ver[7],
          'precio'=>$ver[8],
          'estado'=>$ver[9],
          'ruta'=>$ver[10]);

        return $datos;

      }

      public function ActualizaEntrega($datos) {

        $c= new Conectar();
        $conexion=$c->conexion();

        $sql ="UPDATE admenttentrega
        SET entdescripcion='$datos[1]',
            enttipo ='$datos[2]',
            VECid ='$datos[3]',
            ENTfechahora='$datos[4]',
            CLIdni ='$datos[5]',
            ENTprecio ='$datos[6]',
            ENTestado ='$datos[7]'
        where ENTid='$datos[0]'";
      //CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto
      return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);

      }

}


 ?>
