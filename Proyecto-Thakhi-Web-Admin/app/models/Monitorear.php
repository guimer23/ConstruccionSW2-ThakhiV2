<?php   
namespace App\Models;
use Exception;
class Monitorear{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }
}


?>