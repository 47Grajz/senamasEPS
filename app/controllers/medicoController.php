<?php
namespace App\Controllers;

use App\Models\MedicoModel;

class MedicoController extends BaseController{
    public function __construct()
    {
        $this->layout = "admin_layout";
    }
    public function create()
    {
        require_once '../app/views/medico/CreateView.php';
        //$this->render('medico/create');
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
            $cod_medico = isset($_POST['txtCodMedico']) ? $_POST['txtCodMedico']:"";
            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre']:"";
            $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento']:"";
            $fecha_nacimiento = isset($_POST['txtfechaNac']) ? $_POST['txtfechaNac']:"";
            $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero']:"";
            $email = isset($_POST['txtEmail']) ? $_POST['txtEmail']:"";
            $perfil_profesional = isset($_POST['txtPerfil']) ? $_POST['txtPerfil']:"";
            $fecha_ingreso = isset($_POST['txtFecha_I']) ? $_POST['txtFecha_I']:"";
            $anios_experiencia = isset($_POST['txtAExp']) ? $_POST['txtAExp']:"";
            $fk_cod_usuario = isset($_POST['txtCodUser']) ? $_POST['txtCodUser']:"";

            $medicoObj = new MedicoModel($nombre,$documento,$fecha_nacimiento,$genero,
            $email,$perfil_profesional,$fecha_ingreso,$anios_experiencia,$fk_cod_usuario
            ,$cod_medico);

            $medicoObj->saveMedic();
        }
    }
    public function edit($id)
    {   
        $where = 'cod_medico';
        $MedicoObj = new MedicoModel();
        $newDoc = $MedicoObj->select($where,$id);

        if ($newDoc != null) {
            $data = [
                "Medico" => $newDoc
            ];
            //require_once '../app/views/medico/editView.php';
            $this->render("/medico/edit",$data);
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
            $fk_cod_usuario = isset($_POST['txtCodUser']) ? $_POST['txtCodUser']:"";

            $medicoObj = new MedicoModel($cod_medico,$nombre,$documento,$fecha_nacimiento,$genero,
            $email,$perfil_profesional,$fecha_ingreso,$anios_experiencia,$fk_cod_usuario
            );

            $medicoObj->updateMedico();
        }
    }
    public function eliminar($cod)
    {  
        $from = "medico";
        $where = "cod_medico";
        $medicoObj = new MedicoModel();
        $medicoObj->eliminarPaciente($from,$where,$cod);
        $medicos = $medicoObj->getAll();
         $data = [
            'title' => 'Lista de medicos',
            'Doctors' => $medicos
         ];
         //require_once '../app/views/medico/indexView.php';
        $this->render("/medico/index",$data);
    }
}