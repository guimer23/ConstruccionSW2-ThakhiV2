<?php   
namespace App\Models;
use Exception;
class   Home{
	  private $pdo;
        public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    
}