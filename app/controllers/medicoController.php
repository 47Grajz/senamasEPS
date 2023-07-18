<?php
namespace App\Controllers;

use App\Models\MedicoModel;
use App\Models\EspecialidadModel;
use App\Models\medico_especialidadModel;

class MedicoController extends BaseController{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function create()
    {
        
        $especialidadObj = new EspecialidadModel();

        $especialidad = $especialidadObj->getAll();

         $data = [
            'especialidad' => $especialidad
         ];
         //require_once '../app/views/medico
         $this->render("medico/create", $data);
    }

    
    public function index()
    {
        $MedicoObj = new \App\Models\MedicoModel();

        $medicos = $MedicoObj->getAll();

         $data = [
            'title' => 'Lista de Medicos',
            'Doctors' => $medicos,
            'cant_medicos' => count($medicos) 
         ];
         //require_once '../app/views/medico/indexView.php';
         $this->render("medico/index", $data);
    }
    public function new(){
        if(isset($_POST['txtDocumento'])){

            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre']:"";
            $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento']:"";
            $fecha_nacimiento = isset($_POST['txtfechaNac']) ? $_POST['txtfechaNac']:"";
            $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero']:"";
            $email = isset($_POST['txtEmail']) ? $_POST['txtEmail']:"";
            $perfil_profesional = isset($_POST['txtPerfil']) ? $_POST['txtPerfil']:"";
            $fecha_ingreso = isset($_POST['txtFecha_I']) ? $_POST['txtFecha_I']:"";
            $anios_experiencia = isset($_POST['txtAExp']) ? $_POST['txtAExp']:"";
            $fk_cod_usuario = isset($_POST['txtcodUser']) ? $_POST['txtcodUser']:"";
            $especialidades =  isset($_POST['especialidades']) ? $_POST['especialidades']:"";
            $codigo_doc = isset($_POST['txtCodDoc']) ? $_POST['txtCodDoc']:"";

    
            $medicoObj = new MedicoModel($nombre,$documento,$fecha_nacimiento,$genero,
            $email,$perfil_profesional,$fecha_ingreso,$anios_experiencia,$fk_cod_usuario=6,$cod_medico=null
            );
            $medicoObj->saveMedic();
            $medicos = $medicoObj->getAll();

            for ($i=0;$i< count($medicos);$i++)
            {
                if($documento == $medicos[$i]->documento)
                {
                    $codMedico = $medicos[$i]->cod_medico;
                }
                
            }

            foreach ($_POST['especialidades'] as $item ) {
                $medicoObj->saveEspe($codMedico,$item);
            }
            
       

            $this->redirecTo("/medico/index");
        }
   
    }
    public function edit($id)
    {   
        $where = 'cod_medico';
        $MedicoObj = new MedicoModel();

        $newDoc = $MedicoObj->select($where,$id);

        $esp = new medico_especialidadModel();
        
        $especialidades = $esp->getespecialidad($id);
        
        
        // $especialidades = $newDoc->selecEspecialidad($id);
        
        // foreach ($especialidades as $item1 => $value ) {
        //     $cod_espec = $value->cod_especialidad;
        // }
        if ($newDoc != null) {
            
            $data = [
                "Medico" => $newDoc
                // 'especialidad' => $especialidades
            ];
            //require_once '../app/views/medico/editView.php';
            $this->render("medico/edit",$data);
        }
    }
    public function update(){
        if(isset($_POST['txtDocumento'])){
            $cod_medico = isset($_POST['txtCodMedico']) ? $_POST['txtCodMedico']:"";
            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre']:"";
            $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento']:"";
            $fecha_nacimiento = isset($_POST['txtfechaNac']) ? $_POST['txtfechaNac']:"";
            $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero']:"";
            $email = isset($_POST['txtEmail']) ? $_POST['txtEmail']:"";
            $perfil_profesional = isset($_POST['txtPerfil']) ? $_POST['txtPerfil']:"";
            $fecha_ingreso = isset($_POST['txtFecha_I']) ? $_POST['txtFecha_I']:"";
            $anios_experiencia = isset($_POST['txtAExp']) ? $_POST['txtAExp']:"";
            $especialidad =  isset($_POST['especialidades']) ? $_POST['especialidades']:"";

            $medicoObj = new MedicoModel($nombre,$documento,$fecha_nacimiento,$genero,
            $email,$perfil_profesional,$fecha_ingreso,$anios_experiencia,$fk_cod_usuario=null,$cod_medico
            );

            
            // $especialidades = $medicoObj->selecEspecialidad($id);
            // print_r($especialidades);
            // print_r($especialidad);
            // foreach ($especialidades as $item1 => $value ) {
            // //      $cod_espec = $value->cod_especialidad;
            //  $medicoObj->eliminarEspecialidad($id/*,$cod_espec*/);
            // }
            // foreach ($_POST['especialidades'] as $item ) {
            //     $medicoObj->saveEspe($id,$item);
            // }
            $medicoObj->updateMedico();
            $this->redirecTo("/medico/index");
        }   
    }
    public function eliminar($cod)
    {  
        $from = "medico";
        $where = "cod_medico";
        $medicoObj = new MedicoModel();
        $especialidades = $medicoObj->selecEspecialidad($cod);
        foreach ($especialidades as $item1 => $value ) {
            $cod_espec = $value->cod_especialidad;
           $medicoObj->eliminarEspecialidad($cod,$cod_espec);
        }
        $medicoObj->eliminar($from,$where,$cod);
        $medicos = $medicoObj->getAll();
         $data = [
            'title' => 'Lista de medicos',
            'Doctors' => $medicos
         ];
         //require_once '../app/views/medico/indexView.php';
        $this->redirecTo("/medico/index");
    }
}