<?php   
namespace App\Models;
use Exception;
class   Vehiculo{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];      
        try {
            $stm = $this->pdo->prepare('SELECT  * from admvehtvehiculo');
            $stm->execute();
            $result = $stm->fetchAll();

        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }

    public function obtener(int $id) : Vehiculo{
        $result = new Vehiculo;

        try {
            $stm = $this->pdo->prepare('select * from admvehtvehiculo where VEHid = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();
            $result->VEHid = $fetch->VEHid;
            $result->VEHplaca = $fetch->VEHplaca;
            $result->VEHmarca	 = $fetch->VEHmarca	;
            $result->VEHmodelo = $fetch->VEHmodelo;
            $result->VEHcolor = $fetch->VEHcolor;
            $result->VEHanio_fabricacion = $fetch->VEHanio_fabricacion;
            $result->VEHsoat = $fetch->VEHsoat; 
            $result->VEHestado = $fetch->VEHestado;
           
        } catch(Exception $e) {

        }

        return $result;
    }

}


?>