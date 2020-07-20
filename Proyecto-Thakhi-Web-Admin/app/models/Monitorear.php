<?php   
namespace App\Models;
use Exception;
class Monitorear{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }
    public function listar() : array{
        $result = [];     
        try {
            $stm = $this->pdo->prepare('SELECT  vhi.VEHid, vhi.CONdni,co.CONnombre,co.CONapellido,co.CONcelular,vehi.VEHplaca,  vhi.VEClatitud,vhi.VEClongitud,cli.CLInombre,ent.ENTestado FROM admvectvehiculo_conductor as vhi
            inner join admcontconductor as co
            on vhi.condni= co.CONdni
            inner join admvehtvehiculo as vehi
            on vhi.VEHid=vehi.VEHid
            inner join admenttentrega as ent
            on vhi.VECid= ent.VECid
            inner join admclitcliente as cli
            on ent.CLIdni =cli.CLIdni
              where ent.ENTfechahora=curdate()');
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