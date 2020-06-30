<?php   
namespace App\Models;
use Exception;
class   Cliente{

    private $pdo;
        public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    //Modelo Listar Cliente
    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('SELECT  * from admclitcliente');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }
    //Modelo Obtener Cliente
    public function obtener(int $id) : Cliente{
        $result = new Cliente;

        try {
            $stm = $this->pdo->prepare('select * from admclitcliente where CLIdni = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->CLIdni = $fetch->CLIdni;
            $result->CLInombre = $fetch->CLInombre;
            $result->CLIapellido = $fetch->CLIapellido;
            $result->CLIcelular = $fetch->CLIcelular;
            $result->CLIemail = $fetch->CLIemail;
            $result->CLIclave = $fetch->CLIclave;

            
           
        } catch(Exception $e) {

        }

        return $result;
    }



}


?>