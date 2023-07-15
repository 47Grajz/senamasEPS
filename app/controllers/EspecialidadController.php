<?php 
namespace App\Controllers;

use App\Models\EspecialidadModel;

class EspecialidadController extends BaseController{


        
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    
     public function index(){
        $especialidad = new EspecialidadModel();
        $especialidades = $especialidad->getAll();
        $data=[
            "especialidades"=> $especialidades,
            "cant_especialidades"=> count($especialidades)
        ];
        $this->render('/especialidad/index', $data);
     }

     public function create()
     {
         $this->render('/especialidad/create');
     }
 


     public function new(){
        if(isset($_POST['txtNombre'])){
            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre']:"";
            $descripcion = isset($_POST['txtDesc']) ? $_POST['txtDesc']:"";
            $especialidadObj = new EspecialidadModel($cod_especialidad=null,$nombre,$descripcion);

            $especialidadObj->save();
     
            $this->redirecTo("/especialidad/index");
        }
    }


    public function eliminar($doc)
    {  
        $from = 'especialidad';
        $where = 'cod_especialidad';
        $paciente = new EspecialidadModel();
        $paciente->eliminar($from,$where,$doc);
        $pacientes = $paciente->getAll();

         $data = [
            "pacientes" => $pacientes,
            "cant_pacientes" => count($pacientes)
         ];
        $this->redirecTo("/especialidad/index");
    }

}