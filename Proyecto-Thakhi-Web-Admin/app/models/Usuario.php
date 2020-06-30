<?php   
namespace App\Models;
use Exception;
class   Usuario{
    private $pdo;

    //Iniciando constructor Usuario
    public function __construct(){
        $this->pdo=\Core\Database::getConnection();
    }

    //Metodo Listar Usuario
    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('SELECT  * from admusutusuario');
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