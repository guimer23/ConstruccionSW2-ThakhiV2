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



}


?>