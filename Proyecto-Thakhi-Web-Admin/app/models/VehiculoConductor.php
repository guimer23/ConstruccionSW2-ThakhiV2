<?php
namespace App\Models;

use Exception;
class VehiculoConductor {
    private $pdo;

    public function __construct(){
        $this->pdo = \Core\Database::getConnection();
    }
}