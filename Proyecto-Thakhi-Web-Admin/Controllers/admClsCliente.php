<?php


class Clientes
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

  public function RegistrarCliente($datos)
  {
    $c= new Conectar();
    $conexion=$c->conexion();
    $sql="INSERT INTO admclitcliente (CLIdni,CLInombre,CLIapellido,CLIcelular,CLIemail,CLIclave,CLIfoto)
    values('$datos[0]',
          '$datos[1]',
          '$datos[2]',
          '$datos[3]',
          '$datos[4]',
          '$datos[5]',
          '$datos[6]')";

      return mysqli_query($conexion,$sql);
  }


  public function obtenDatosCliente($idusuario){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT  cli.CLIdni,
                  cli.CLInombre,
                  cli.CLIapellido,
                  cli.CLIcelular,
                  cli.CLIemail,
                  cli.CLIclave,
              img.IMGruta
					from admclitcliente as cli
          inner join  admimgtimagen as img
          on cli.CLIfoto=img.IMGid
					where cli.CLIdni='$idusuario'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
						  'id' => $ver[0],
							'nombre' => $ver[1],
							'apellido' => $ver[2],
							'celular' => $ver[3],
              'email' => $ver[4],
              'clave' => $ver[5],
              'foto' => $ver[6]
						);

			return $datos;
		}

  public function ActualizaCliente($datos) {

			$c= new Conectar();
		$conexion=$c->conexion();

		$sql ="UPDATE admclitcliente
		SET CLInombre='$datos[1]',
  		  CLIapellido='$datos[2]',
        CLIcelular='$datos[3]',
        CLIemail='$datos[4]',
      	CLIclave	='$datos[5]'
		where CLIdni='$datos[0]'";
//CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto
	return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);

	}
}


 ?>
