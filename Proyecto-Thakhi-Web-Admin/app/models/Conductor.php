<?php   
namespace App\Models;
use Exception;
class   Conductor{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('SELECT  * from admcontconductor');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }
        return $result;
    }

    public function obtener(int $id) : Conductor{
        $result = new Conductor;

        try {
            $stm = $this->pdo->prepare('select * from admcontconductor where CONdni = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->CONdni = $fetch->CONdni;
            $result->CONnombre = $fetch->CONnombre;
            $result->CONapellido = $fetch->CONapellido;
            $result->CONlicencia = $fetch->CONlicencia;
            $result->CONvigencialicencia = $fetch->CONvigencialicencia;
            $result->CONcelular = $fetch->CONcelular;
            $result->CONemail = $fetch->CONemail;
            $result->CONdireccion = $fetch->CONdireccion;
            $result->CONestado = $fetch->CONestado;   
            
           
        } catch(Exception $e) {

        }

        return $result;
    }
}


?>