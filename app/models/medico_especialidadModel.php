<?php 

namespace App\Models;

use Error;
use PDOException;

class medico_especialidadModel extends BaseModel{

     
    public function __construct(
        private ?string $cod_especialidad = null,
        private ?string $cod_medico = null,
    )
    {
        $this->table = 'medico_especialidad'; 
        parent::__construct();
    }

    
    public function save(){
        try {
            $sql = $this->dbConnection->prepare("INSERT INTO medico_especialidad (cod_medico,cod_especialidad) VALUES(?,?)");

            $sql->bindParam(1, $this->cod_medico);
            $sql->bindParam(2, $this->cod_especialidad);            
            $sql->execute();

        } catch (PDOException $m) {
            die("Error guardando especialidad  " . $m->getMessage());
        }
    }

}
