<?php

namespace App\Models;

use PDO;
use PDOException;


abstract class BaseModel
{
    protected $dbConnection; //Atributo que contiene la conexion EN: 
    protected $table; //Representa  la tabla del modelo actuual EN:






    public function __construct()
    {
        $dbConfig = require_once MAIN_APP_ROUTE . '/../config/database.php';
        try {
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";$username = $dbConfig['username'];$password = $dbConfig['password'];
            //Se crea una instancia de PDO y se asocia al atributo db Conection
            $this->dbConnection = new PDO($dsn, $username, $password);

            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexion" . $e->getMessage());
        }
    }
    public function getAll(): array
    {
        try {
            //Query que se ejecutara.
            $query = "SELECT * FROM $this->table";

            //Obtener los resultados en un array
            $statment = $this->dbConnection->query($query);
            $resultSet = $statment->fetchAll(PDO::FETCH_OBJ);
            return $resultSet;
        } catch (PDOException $e) {
            die("Error en consulta" . $e->getMessage());
        }
    }
    public function select($where,$id): array
    {
        try {
            //Query que se ejecutara.
            $query = "SELECT * FROM $this->table where $where = $id";
            //Obtener los resultados en un array
            $statment = $this->dbConnection->query($query);
            $resultSet = $statment->fetchAll(PDO::FETCH_OBJ);
            return $resultSet;
        } catch (PDOException $e) {
            die("Error en consulta" . $e->getMessage());
        }
    }
    public function details($where,$id): array
    {
        try {
            //Query que se ejecutara.
            $query = "SELECT * FROM $this->table INNER JOIN usuario where $where = $id";
            //Obtener los resultados en un array
            $statment = $this->dbConnection->query($query);
            $resultSet = $statment->fetchAll(PDO::FETCH_OBJ);
            return $resultSet;
        } catch (PDOException $e) {
            die("Error en consulta" . $e->getMessage());
        }
    }
    public function eliminar($from,$where,$documento){
        try{
            $sql = $this->dbConnection->prepare("DELETE FROM $from
            WHERE $where = :doc ;");
            $sql->bindParam(":doc", $documento);
           if($sql->execute()) {
                echo "<script> alert('Se ha eliminado el $from') </script>";
               return true;
           }else
           return false;
        }catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
   }
    
}
