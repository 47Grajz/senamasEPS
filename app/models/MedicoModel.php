<?php

namespace App\Models;

use PDOException;
use PDO;

class MedicoModel extends BaseModel
{
    public function __construct(
        private ?string $nombre = null,
        private ?string $documento = null,
        private ?string $fecha_nacimiento = null,
        private ?string $genero = null,
        private ?string $email = null,
        private ?string $Perfil_profesional = null,
        private ?string $fecha_ingreso = null,
        private ?string $anios_experiencia = null,
        private ?string $fk_cod_usuario = null,
        private ?string $cod_medico = null
    ) {
        $this->table = 'medico';
        parent::__construct();
    }
    public function saveMedic()
    {
        try {
            $sql = $this->dbConnection->prepare(" INSERT INTO medico (nombre,documento,fecha_nacimiento,genero,email,perfil_profesional,
            fecha_ingreso,anios_experiencia,fk_cod_usuario)
            VALUES (?,?,?,?,?,?,?,?,?);
            ");
            // $sql->bindParam(1, $this->cod_medico);
            $sql->bindParam(1, $this->nombre);
            $sql->bindParam(2, $this->documento);
            $sql->bindParam(3, $this->fecha_nacimiento);
            $sql->bindParam(4, $this->genero);
            $sql->bindParam(5, $this->email);
            $sql->bindParam(6, $this->Perfil_profesional);
            $sql->bindParam(7, $this->fecha_ingreso);
            $sql->bindParam(8, $this->anios_experiencia);
            $sql->bindParam(9, $this->fk_cod_usuario);

            $sql->execute();
        } catch (PDOException $ex) {
            die('Error guardando paciente' . $ex->getMessage());
        }
    }

    public function saveEspe($cod_medico,$cod_especialidad)
    {
        try {
  
            $sql = $this->dbConnection->prepare(" INSERT INTO medico_especialidad (cod_medico,cod_especialidad)
            VALUES (?,?);
            ");
            $sql->bindParam(1, $cod_medico);
            $sql->bindParam(2, $cod_especialidad);

            $sql->execute();

        } catch (PDOException $ex) {
            die('Error guardando medico' . $ex->getMessage());
        }
    }

    public function eliminarEspecialidad($cod_medico,/*$cod_especialidad*/){
        try{
            $sql = $this->dbConnection->prepare("DELETE FROM senamaseps.medico_especialidad
              WHERE cod_medico=:cod /*AND cod_especialidad=:codE*/");
            $sql->bindParam(":cod", $cod_medico);
            // $sql->bindParam(":codE", $cod_especialidad);
           if($sql->execute()) {
               return true;
           }else
           return false;
        }catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    public function selecEspecialidad($cod_medico){
        try {
            //Query que se ejecutara.
            $query = "SELECT cod_especialidad FROM senamaseps.medico_especialidad where cod_medico = $cod_medico";
            //Obtener los resultados en un array
            $statment = $this->dbConnection->query($query);
            $resultSet = $statment->fetchAll(PDO::FETCH_OBJ);
            return $resultSet;
        } catch (PDOException $e) {
            die("Error en consulta" . $e->getMessage());
        }
    }
    public function updateMedico()
    {
        try {
            $sql = $this->dbConnection->prepare(" UPDATE medico SET nombre=:nombre,documento =:documento,fecha_nacimiento=:fecha_nacimiento,genero=:genero,email=:email,
            perfil_profesional=:perfil_profesional,fecha_ingreso=:fecha_ingreso,anios_experiencia=:anios_experiencia    
            WHERE cod_medico = :cod_medico");

            $sql->bindParam(":documento", $this->documento);
            $sql->bindParam(":nombre", $this->nombre);
            $sql->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);
            $sql->bindParam(":genero", $this->genero);
            $sql->bindParam(":email", $this->email);
            $sql->bindParam(":perfil_profesional", $this->Perfil_profesional);
            $sql->bindParam(":fecha_ingreso", $this->fecha_ingreso);
            $sql->bindParam(":anios_experiencia", $this->anios_experiencia);
            $sql->bindParam(":cod_medico", $this->cod_medico);

            $sql->execute();
        } catch (PDOException $ex) {
            die('Error guardando paciente' . $ex->getMessage());
        }
    }

}
