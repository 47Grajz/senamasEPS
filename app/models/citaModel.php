<?php 

namespace App\Models;

use DateTime;
use PDOException;

class citaModel extends BaseModel
{
    public function __construct(
        private ?string $codCita=null,
        private ?string $lugar=null,
        private ?string $consultorio=null,
        private ?string $doctor=null,
        private ?string $fecha_cita=null,
        private ?string $hora_cita=null,
        private ?string $fecha_registro=null,
        private ?int $fk_paciente_documento=null
    )
    {
        $this->table = 'cita';
        parent::__construct();
    }
    public function save(){
        try {
            $sql = $this->dbConnection->prepare(" INSERT INTO cita(codCita,lugar,consultorio,doctor,fecha_cita,hora_cita,fecha_registro,fk_paciente_documento)
            VALUES (?,?,?,?,?,?,?,?);
            ");
            $sql->bindParam(1, $this->codCita);
            $sql->bindParam(2, $this->lugar);
            $sql->bindParam(3, $this->consultorio); 
            $sql->bindParam(4, $this->doctor);
            $sql->bindParam(5, $this->fecha_cita);
            $sql->bindParam(6, $this->hora_cita);
            $sql->bindParam(7, $this->fecha_registro);
            $sql->bindParam(8, $this->fk_paciente_documento);
            $sql->execute();
        } catch (PDOException $ex) {
           die('Error guardando Cita'.$ex->getMessage());
        }

    }
}