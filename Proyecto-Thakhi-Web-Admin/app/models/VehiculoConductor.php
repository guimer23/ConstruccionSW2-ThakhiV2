<?php
namespace App\Models;

use Exception;
class VehiculoConductor {
    private $pdo;

    public function __construct(){
        $this->pdo = \Core\Database::getConnection();
    }
        public function listar() : array{
        $result = [];

        try {
            $sql = "SELECT adm.VECid,con.CONnombre,con.CONapellido,mo.VEHplaca,adm.VECestado from admvectvehiculo_conductor  as adm
            inner join admcontconductor as con
           on con.CONdni=adm.CONdni
           inner join admvehtvehiculo as mo
           on adm.VEHid= mo.VEHid";

            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {

        }

        return $result;
    }
}