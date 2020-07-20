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
    //        $model->VECid=$_POST['VECid'];
public function guardar(VehiculoConductor $model) : bool{
    $result = false;

    try {

        if(empty($model->VECid)){
            $sql = '
            INSERT INTO admvectvehiculo_conductor (condni,VEHid,VECestado) values (?, ?, ?)';

            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->CONdni,
                $model->VEHid ,
                $model->VECestado  ]);   
//VEHsoat
        } else {
            $sql = '
                update admvectvehiculo_conductor
                set 
                condni = ?,
                VEHid = ?,
                VECestado = ?
                where VECid = ?
            ';

            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->CONdni,
                $model->VEHid,
                $model->VECestado,
                $model->VECid
            ]);
        }

        $result = true;
    } catch(Exception $e) {
        throw new Exception($e->getMessage());
    }

    return $result;
}
  
}