<?php 

namespace App\Models;

use PDOException;

class pacienteModel extends BaseModel
{
    public function __construct(
        private ?int $documento=null,
        private ?string $nombre=null,
        private ?string $direccion=null,
        private ?string $telefono=null,
        private ?string $fechanacimiento=null,
        private ?string $estado=null,
        private ?string $genero=null,
        private ?string $eps=null,
        private ?string $fkCodUsuario=null,
        private ?string $email=null,
    )
    {
        $this->table = 'paciente';
        parent::__construct();
    }
    public function save(){
        try {
            $sql = $this->dbConnection->prepare(" INSERT INTO paciente (documento,nombre,direccion,telefono,fechanacimiento,estado,
            genero,eps,FK_cod_usuario,email)
            VALUES (?,?,?,?,?,?,?,?,?,?);
            ");
            $sql->bindParam(1, $this->documento);
            $sql->bindParam(2, $this->nombre);
            $sql->bindParam(3, $this->direccion);
            $sql->bindParam(4, $this->telefono);
            $sql->bindParam(5, $this->fechanacimiento);
            $sql->bindParam(6, $this->estado);
            $sql->bindParam(7, $this->genero);
            $sql->bindParam(8, $this->eps);
            $sql->bindParam(9, $this->fkCodUsuario);
            $sql->bindParam(10, $this->email);
    
            $sql->execute();
        } catch (PDOException $ex) {
           die('Error guardando paciente'.$ex->getMessage());
        }

    }
    public function updatePeople(){
        try {
            $sql = $this->dbConnection->prepare(" UPDATE paciente SET nombre=:nombre,direccion =:direccion,telefono=:telefono,fechanacimiento=:fechanacimiento,estado=:estado,
            genero=:genero,eps=:eps,email=:email
            WHERE documento = :documento
            ");

            $sql->bindParam(":documento", $this->documento);
            $sql->bindParam(":nombre", $this->nombre);
            $sql->bindParam(":direccion", $this->direccion);
            $sql->bindParam(":telefono", $this->telefono);
            $sql->bindParam(":fechanacimiento", $this->fechanacimiento);
            $sql->bindParam(":estado", $this->estado);
            $sql->bindParam(":genero", $this->genero);
            $sql->bindParam(":eps", $this->eps);
            $sql->bindParam(":email", $this->email);
    
            $sql->execute();
            echo "<script> alert('Se han actualizado los datos del paciente')
            window.location.href = '/paciente/index'</script>";
        } catch (PDOException $ex) {
           die('Error guardando paciente'.$ex->getMessage());
        }

    }
   
}