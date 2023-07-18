<?php

namespace App\Controllers;

use App\Models\citaModel;
use App\Models\pacienteModel;

class citaController extends BaseController
{

    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function index()
    {
        $cita = new citaModel();

        $citas=$cita->getAll();
        $data=[
            "citas"=> $citas,
            "cant_citas"=> count($citas)
        ];

        
        $this->render('/cita/index', $data);
    }
    public function create(){
        if(isset($_POST['txtDocumentoPaci'])){
            //Si llegan los datos de la vista
            $lugar = $_POST['txtLugar'];
            $consultorio = $_POST['txtConsultorio'];
            $doctor = $_POST['txtDoctor'];
            $fecha_cita = $_POST['txtFechaCi'];
            $hora_cita = $_POST['txtHoraCi'];
            $fecha_registro = date('d-m-Y H:i:s');
            $paciente_documento = $_POST['txtDocumentoPaci'];
            //Se crea objeto paciente de los datos recibidos de la vista
            $citaDB = new citaModel($codCita=null, $lugar, $consultorio, $doctor, $fecha_cita, 
            $hora_cita, $fecha_registro, $paciente_documento);
            $citaDB->save();
            $this->redirecTo("/cita/index");
        }else{
            // Si se llama la vista
            $objPaciente = new pacienteModel();
            $pacientes = $objPaciente->getAll();
            $data = [
                'pacientes' => $pacientes
            ];
            //require_once MAIN_APP_ROUTE . 'views/cita/createView.php';
             $this->render('cita/create', $data);
        }
    }

    public function eliminar($doc)
    {  
        $from = 'cita';
        $where = 'fk_paciente_documento';
        $cita = new citaModel();
        $cita->eliminar($from,$where,$doc);
        $citas = $cita->getAll();

         $data = [
            "citas" => $citas,
            "cant_citas" => count($citas)
         ];
        $this->redirecTo("/cita/index");
    }

    public function edit($id)
    {   
        $where = 'codCita';
        $CitaObj = new citaModel();
        $newCita = $CitaObj->select($where,$id);

        // $objPacientes = new pacienteModel();
        // $pacientes = $objPacientes->getAll();

        if ($newCita != null) {
            

            $data = [
                "cita" => $newCita,
                "pacientes" => $pacientes
            ];

            $this->render("cita/edit",$data);
        }
    }

    public function save(){
        if(isset($_POST['txtDocumentoPaci'])){
            //Si llegan los datos de la vista
            $lugar = $_POST['txtLugar'];
            $consultorio = $_POST['txtConsultorio'];
            $doctor = $_POST['txtDoctor'];
            $fecha_cita = $_POST['txtFechaCi'];
            $hora_cita = $_POST['txtHoraCi'];
            $fecha_registro = date('d-m-Y H:i:s');
            $paciente_documento = $_POST['txtDocumentoPaci'];
            //Se crea objeto paciente de los datos recibidos de la vista
            $citaDB = new citaModel($codCita=null, $lugar, $consultorio, $doctor, $fecha_cita, 
            $hora_cita, $fecha_registro, $paciente_documento);
            $citaDB->save();
            $this->redirecTo("/cita/index");
        }else{
            // Si se llama la vista
            $objPaciente = new pacienteModel();
            $pacientes = $objPaciente->getAll();
            $data = [
                'pacientes' => $pacientes
            ];
            //require_once MAIN_APP_ROUTE . 'views/cita/createView.php';
             $this->render('cita/edit', $data);
        }
    }
    
}
