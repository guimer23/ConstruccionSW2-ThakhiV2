<?php   
namespace App\Models;
use Exception;

class   Entregas{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }


}


?>