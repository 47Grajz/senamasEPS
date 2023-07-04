<?php

namespace App\Models;

use PDOException;

class MedicoModel extends BaseModel
{
    public function __construct(
        private ?string $cod_medico = null,
        private ?string $nombre = null,
        private ?string $documento = null,
        private ?string $fecha_nacimiento = null,
        private ?string $genero = null,
        private ?string $email = null,
        private ?string $Perfil_profesional = null,
        private ?string $fecha_ingreso = null,
        private ?string $anios_experiencia = null,
        private ?string $fk_cod_usuario = null,
    ) {
        $this->table = 'Medico';
        parent::__construct();
    }
    public function saveMedic()
    {
        try {
            $sql = $this->dbConnection->prepare(" INSERT INTO medico (nombre,documento,fecha_nacimiento,genero,email,perfil_profesional,
            fecha_ingreso,anios_experiencia,fk_cod_usuario)
            VALUES (?,?,?,?,?,?,?,?,?);
            ");
            $sql->bindParam(1, $this->cod_medico);
            $sql->bindParam(2, $this->nombre);
            $sql->bindParam(3, $this->documento);
            $sql->bindParam(4, $this->fecha_nacimiento);
            $sql->bindParam(5, $this->genero);
            $sql->bindParam(6, $this->email);
            $sql->bindParam(7, $this->Perfil_profesional);
            $sql->bindParam(8, $this->fecha_ingreso);
            $sql->bindParam(9, $this->anios_experiencia);

            $sql->execute();
        } catch (PDOException $ex) {
            die('Error guardando paciente' . $ex->getMessage());
        }
    }
    public function updateMedico()
    {
        try {
            $sql = $this->dbConnection->prepare(" UPDATE medico SET nombre=:nombre,documento =:documento,fecha_nacimiento=:fecha_nacimiento,genero=:genero,email=:email,
            perfil_profesional=:perfil_profesional,fecha_ingreso=:fecha_ingreso,anios_experiencia=:anios_experiencia    
            WHERE cod_medico = :cod_medico
            ");

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
            echo "<script> alert('Se han modificado los datos del medico')
            window.location.href = '/medico/index'</script>";
        } catch (PDOException $ex) {
            die('Error guardando paciente' . $ex->getMessage());
        }
    }

}
