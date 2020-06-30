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

    //Metodo Obtener Usuario
    public function obtener(int $id) : Usuario{
        $result = new Usuario;

        try {
            $stm = $this->pdo->prepare('select * from admusutusuario where USUid = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->USUid = $fetch->USUid;
            $result->USUnombre = $fetch->USUnombre;
            $result->USUapellidos = $fetch->USUapellidos;
            $result->USUemail = $fetch->USUemail;            
            $result->USUusuario = $fetch->USUusuario;
            $result->USUpassword = $fetch->USUpassword;
            $result->USUestado = $fetch->USUestado;
            $result->ruta_foto = $fetch->ruta_foto;
           
        } catch(Exception $e) {

        }

        return $result;
    }

    //Metodo Guardar Usuario
    public function guardar(Usuario $model) : bool{
        $result = false;

        try {

            if(empty($model->USUid)){     

                $sql = '
                insert into admusutusuario(             
                    USUnombre,
                    USUapellidos,
                    USUemail,                 
                    USUusuario,
                    USUpassword,
                    USUestado,
                    ruta_foto
                ) values (?,?, ?, ?, ?,?,?)';
    
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->USUnombre,
                $model->USUapellidos,
                $model->USUemail,
                $model->USUusuario,
                $model->USUpassword,
                $model->USUestado,
                $model->ruta_foto
            ]);  

            } else {
                $sql = '
                    update admusutusuario
                    set 
                    USUnombre = ?,
                    USUapellidos = ?,
                    USUemail = ?,
                    USUusuario = ?,
                    USUpassword = ?,
                    USUestado = ?
                    where USUid = ?
                ';

                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                    $model->USUnombre,
                    $model->USUapellidos,
                    $model->USUemail,
                    $model->USUusuario,
                    $model->USUpassword,
                    $model->USUestado,                  
                    $model->USUid
                ]);
            }

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

    //Metodo Guardar2 Usuario
    public function guardar2(Usuario $model) : bool{
        $result = false;

        try {

            $sql = '
            insert into admusutusuario(             
                USUnombre,
                USUapellidos,
                USUemail,                 
                USUusuario,
                USUpassword,
                USUestado,
                ruta_foto
            ) values (?,?, ?, ?, ?,?,?)';

        $stm = $this->pdo->prepare($sql);
        $stm->execute([
            $model->USUnombre,
            $model->USUapellidos,
            $model->USUemail,
            $model->USUusuario,
            $model->USUpassword,
            $model->USUestado,
            $model->ruta_foto
        ]);        

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

}
?>