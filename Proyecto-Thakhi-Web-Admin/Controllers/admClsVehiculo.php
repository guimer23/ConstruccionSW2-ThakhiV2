<?php
/**
 *
 */
class Vehiculo
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

    public function RegistrarVehiculo($datos)
    {
      $c= new Conectar();
      $conexion=$c->conexion();
      $sql="INSERT INTO admvehtvehiculo (VEHplaca,VEHmarca,VEHmodelo,VEHcolor,VEHanio_fabricacion,VEHsoat,VEHestado,VEHfoto)
      values('$datos[0]',
            '$datos[1]',
            '$datos[2]',
            '$datos[3]',
            '$datos[4]',
            '$datos[5]',
            '$datos[6]',
            '$datos[7]')";

        return mysqli_query($conexion,$sql);
    }

    public function ObtenDatosVehiculo($codigo){
$co=1;
          $c= new Conectar();
          $conexion=$c->conexion();
          $sql ="SELECT ad.VEHid, ad.VEHplaca,ad.VEHmarca,ad.VEHmodelo,ad.VEHcolor,ad.VEHanio_fabricacion,ad.VEHsoat,ad.VEHestado,img.IMGruta from admvehtvehiculo as ad
          inner join admimgtimagen as img
          on ad.VEHfoto=img.IMGid
          where ad.VEHid='$codigo'";

          $resultado =mysqli_query($conexion,$sql);
          $ver=mysqli_fetch_row($resultado);
          $datos=array(
            'Codigo'=>$ver[0],
            'Placa'=>$ver[1],
            'Marca'=> $ver[2],
            'Modelo'=>$ver[3],
            'Color'=>$ver[4],
            'Fabricacion'=> $ver[5],
            'Soat'=>$ver[6],
            'Estado'=> $ver[7],
              'Foto'=> $ver[8]
              );

          return $datos;

    }

    public function ActualizaVehiculo($datos) {

      $c= new Conectar();
      $conexion=$c->conexion();

      $sql ="UPDATE admvehtvehiculo
      SET VEHplaca='$datos[1]',
          VEHmarca ='$datos[2]',
          VEHmodelo ='$datos[3]',
          VEHcolor='$datos[4]',
          VEHanio_fabricacion ='$datos[5]',
          VEHsoat ='$datos[6]' ,
          VEHestado ='$datos[7]',
          VEHfoto ='$datos[8]'

      where VEHid='$datos[0]'";
    //CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto
    return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);

    }

}



 ?>
