<?php 
 
namespace App\Models;

use PDOException;

class UserModel extends BaseModel
{
    public function __construct(
        private ?int $cod_usuario = null,
        private ?string $usuario = null,
        private ?string $contrasena = null,
        private ?string $estado = null,
        private ?string $tipo_usuario = null,
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
                $hash = $resultset[0]->contrasena;
                // $passHase = password_hash($this->contrasena, PASSWORD_BCRYPT);
                // echo $passHase;
                if(password_verify($this->contrasena , $hash)){
                    $_SESSION['tipo_usuario'] = $resultset[0]->tipo_usuario;
                    $_SESSION['cod_usuario'] =  $resultset[0]->cod_usuario ;
                    $_SESSION['nombre'] = $resultset[0]->usuario;
                    // $_SESSION['documento'] = $resultset[0]->password;
                    $_SESSION['timeout'] = time();
                    session_regenerate_id();
                    return true;
                    // $_SESSION['tipo_usuario'] =  $resultset[0]->tipo_usuario ;
                    // $_SESSION['cod_usuario'] =  $resultset[0]->cod_usuario ;
                    // $_SESSION['nombre'] = $resultset[0]->usuario;
                    // // $_SESSION['documento'] = $resultset[0]->password;
                    // $_SESSION['timeout'] = time();
                    // session_regenerate_id();
                    // return true; 
                }
            }
            return false;
        }catch(PDOException $e){
            echo "Error:". $e->getMessage();
           die();
        }
    }

    public function save(){
        try {
            $passHase = password_hash($this->contrasena, PASSWORD_BCRYPT);
            $sql = $this->dbConnection->prepare(" INSERT INTO usuario (usuario,contrasena,estado,create_at,tipo_usuario)
            VALUES (?,?,?,?,?);
            ");
            $sql->bindParam(1, $this->usuario);
            $sql->bindParam(2, $passHase);
            $sql->bindParam(3, $this->estado);
            $sql->bindParam(4, $this->create_at);
            $sql->bindParam(5, $this->tipo_usuario);
            $sql->execute();
        } catch (PDOException $ex) {
           die('Error guardando paciente'.$ex->getMessage());
        }

    }
}