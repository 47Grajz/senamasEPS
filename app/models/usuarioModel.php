<?php 

namespace App\Models;

use DateTime;
use PDOException;

class usuarioModel extends BaseModel
{
    public function __construct(
        private ?int $cod_usuario=null,
        private ?string $nombre=null,
        private ?string $usuario=null,
        private ?string $password=null,
        private ?string $estado=null,
        private ?DateTime $fecha_creacion=null,
        private ?string $tipo_usuario=null,
    )
    {
        echo "Se crea objeto usuario";
        $this->table = 'usuario';
        parent::__construct();
    }
    // public function eliminarusuario($documento){
    //     try{
    //         $sql = $this->dbConnection->prepare("DELETE FROM senamaseps.usuario
    //         WHERE cod_usuario= :documento;");
    //         $sql->bindParam(":documento", $documento);
    //        if($sql->execute()) {
    //         return true;
    //        }else
    //        return false;
    //     }catch (PDOException $ex) {
    //         echo $ex->getMessage();
    //         die();
    //     }
    // }
}