<?php 
 
namespace App\Models;

use PDOException;

class UserModel extends BaseModel
{
    public function __construct(
        private ?int $cod_usuario = null,
        private ?string $usuario = null,
        private ?string $password = null,
        private ?string $estado = null,
        private ?string $tipoUsuario = null,
        private ?string $create_at = null,
    )
    {
        $this->table = "usuario";
        parent::__construct();
    }
    public function ValidarLogin(){
        try{
            $sql = $this->dbConnection->prepare("SELECT * FROM usuario WHERE usuario = ?");
            $sql->bindParam(1, $this->usuario);
            $sql->execute();
            $resultset = [];
            while ($row = $sql->fetch(\PDO::FETCH_OBJ)) {
                $resultset[] = $row;
            }
            if(count($resultset) > 0){
                $hash = $resultset[0]->password;
                 $passHase = password_hash($this->password, PASSWORD_BCRYPT);
                 echo $passHase;
                if(password_verify($this->password , $hash)){
                    $_SESSION['tipo_usuario'] = 'paciente';
                    $_SESSION['nombre'] = $resultset[0]->usuario;
                    // $_SESSION['documento'] = $resultset[0]->password;
                    $_SESSION['time_out'] = time();
                    session_regenerate_id();
                    return true;
                }
            }
            return false;
        }catch(PDOException $e){
            echo "Error:". $e->getMessage();
           die();
        }
    }
}