<?php


class Conductores
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
  public function RegistrarConductor($datos)
  {
    $c= new Conectar();
    $conexion=$c->conexion();
    $sql="INSERT INTO admcontconductor (CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto)
    values('$datos[0]',
          '$datos[1]',
          '$datos[2]',
          '$datos[3]',
          '$datos[4]',
          '$datos[5]',
          '$datos[6]',
          '$datos[7]',
          '$datos[8]',
          '$datos[9]',
          '$datos[10]')";

      return mysqli_query($conexion,$sql);
  }

  public function obtenDatosConductor($idusuario){

			$c=new Conectar();
			$conexion=$c->conexion();

			$sql="SELECT  ad.CONdni,
                    ad.CONnombre,
                    ad.CONapellido,
                    ad.CONlicencia,
                    ad.CONvigencialicencia,
                    ad.CONemail,
                    ad.CONcelular,
                    ad.CONclave,
                    ad.CONdireccion,
                    ad.CONestado,
                    img.IMGruta
					from admcontconductor  as ad
          inner join admimgtimagen as img
          on ad.CONfoto =  img.IMGid
					where ad.CONdni='$idusuario'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
						  'id' => $ver[0],
							'nombre' => $ver[1],
							'apellido' => $ver[2],
							'licencia' => $ver[3],
              'vigencia' => $ver[4],
              'email' => $ver[5],
              'celular' => $ver[6],
              'clave' => $ver[7],
              'direccions' => $ver[8],
              'estado' => $ver[9],
              'foto' => $ver[10]

						);


			return $datos;
		}

  public function ActualizaConductor($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE admcontconductor
		SET CONnombre='$datos[1]',
		    CONapellido ='$datos[2]',
        CONlicencia ='$datos[3]',
        CONvigencialicencia='$datos[4]',
    		CONcelular ='$datos[5]',
        CONemail ='$datos[6]' ,
        CONclave ='$datos[7]',
        CONdireccion='$datos[8]',
    		CONestado ='$datos[9]',
        CONfoto ='$datos[10]'

		where CONdni='$datos[0]'";
//CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto
	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);

	}
}


 ?>
