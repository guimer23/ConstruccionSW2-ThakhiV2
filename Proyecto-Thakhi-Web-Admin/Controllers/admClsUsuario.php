
<?php

class Usuario
{

  public  function Login($datos)
  {
    $c=new Conectar();
			$conexion=$c->conexion();

			//$password=sha1($datos[1]);

			$_SESSION['usu']=$datos[0];

		//	$_SESSION['Nivel']=self::TraeCodigo($datos);
    //  $var="admin";
			$sql="SELECT * 	FROM admusutusuario where USUusuario='$datos[0]' and  USUpassword = '$datos[1]'";

			$result=mysqli_query($conexion,$sql);
      if(mysqli_num_rows($result)>0){
    				return 1;
    			}else{
    				return 0;
    			}
  }

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

    public function RegistrarUsuario($datos)
    {
      $c= new Conectar();
      $conexion=$c->conexion();
      $sql="INSERT INTO admusutusuario (USUnombre,USUapellidos,USUemail,USUusuario,USUpassword,USUestado,USUfoto)
      values('$datos[0]',
            '$datos[1]',
            '$datos[2]',
            '$datos[3]',
            '$datos[4]',
            '$datos[5]',
            '$datos[6]')";

        return mysqli_query($conexion,$sql);
    }

    public function ObtenDatosUsuario($codigo){
          $c= new Conectar();
          $conexion=$c->conexion();

          $sql ="SELECT d.USUid,d.USUnombre,d.USUapellidos,d.USUemail,d.USUusuario,d.USUpassword,d.USUestado,d.USUfoto,img.IMGruta from admusutusuario as d
          inner join  admimgtimagen as img
          on d.USUfoto=img.IMGid
          where d.USUid='$codigo'";

          $resultado=mysqli_query($conexion,$sql);
          $ver=mysqli_fetch_row($resultado);

          $datos=array(
            'Nombres'=>$ver[1],
            'Apellido'=>$ver[2],
            'Email'=>$ver[3],
            'Usuario'=>$ver[4],
            'Password'=>$ver[5],
            'Estado'=>$ver[6],
            'Foto'=>$ver[7],
            'Ruta'=>$ver[8]);

          return $datos;

        }
        public function ActualizaUsuario($datos) {

          $c= new Conectar();
          $conexion=$c->conexion();

          $sql ="UPDATE admusutusuario
          SET USUnombre='$datos[1]',
              USUapellidos ='$datos[2]',
              USUemail ='$datos[3]',
              USUusuario='$datos[4]',
              USUpassword ='$datos[5]',
              USUestado ='$datos[6]'
          where USUid='$datos[0]'";
        //CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto
        return mysqli_query($conexion,$sql);// e mysqli_query($conexion,$sql);

        }

}


 ?>
