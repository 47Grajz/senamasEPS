<?php 

namespace App\Models;

use Error;
use PDOException;

class EspecialidadModel extends BaseModel{

    
    public function __construct(
        private ?string $cod_especialidad = null,
        private ?string $nombre = null,
        private ?string $descripcion = null
    )
    {
        $this->table = 'especialidad';
        parent::__construct();
    }
    public function save(){
        try {
            $sql = $this->dbConnection->prepare("INSERT INTO especialidad (nombre,descripcion) VALUES(?,?)");

            $sql->bindParam(1,$this->nombre);
            $sql->bindParam(2,$this->descripcion);

            $sql->execute();

        } catch (PDOException $m) {
            die("Error guardando especialidad " . $m->getMessage());
        }
    }

}
