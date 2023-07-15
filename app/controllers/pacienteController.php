<?php

namespace App\Controllers;

use App\Models\pacienteModel;


class PacienteController extends BaseController
{
    
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function details($id){

        $pacienteObj  = new pacienteModel();
        
        $pacientes = $pacienteObj->details($id);
        if ($pacientes != null) {
            $data = [
                "informacion" => $pacientes
            ];
            $this->render("paciente/details",$data);
            //$this->render("paciente/edit");
        }
        else echo 'No disponible';
    }
    public function eliminar($doc)
    {  
        $from = 'paciente';
        $where = 'documento';
        $paciente = new pacienteModel();
        $paciente->eliminar($from,$where,$doc);
        $pacientes = $paciente->getAll();

         $data = [
            "pacientes" => $pacientes,
            "cant_pacientes" => count($pacientes)
         ];
        $this->redirecTo("/paciente/index");
    }
    
    public function edit($id)
    {   
        $where = 'documento';
        $paciente = new pacienteModel();
        $newPac = $paciente->select($where,$id);

        if ($newPac != null) {
            $data = [
                "paciente" => $newPac
            ];
            //require_once '../app/views/paciente/editView.php';
            $this->render("paciente/edit",$data);
        }
    }
    public function getPaciente($id)
    {
        $where = 'documento';
        $paciente = new pacienteModel();
        $newPac = $paciente->select($where,$id);

        if ($newPac != null) {
            $data = [
                "paciente" => $newPac
            ];
            require_once '../app/views/paciente/test.php';
        }
    }
    public function index()
    {
        $paciente = new pacienteModel();

        $pacientes = $paciente->getAll();
        
        $data = [
            "pacientes" => $pacientes,
            "cant_pacientes" => count($pacientes)
        ];
        $this->render("/paciente/index",$data);
    }
    public function index2()
    {
        $data = [
            'cantidad' => 30
        ];
        require_once '../app/views/paciente/index.php';
    }
    public function test()
    {
        $pacienteObj = new \App\Models\pacienteModel();

        $pacientes = $pacienteObj->getAll();

         $data = [
            'title' => 'Lista de pacientes',
            'patients' => $pacientes
         ];
         $this->render('paciente/index', $data);
     
    }
    public function create()
    {
        $this->render('paciente/create');
    }
    
    public function new()
    {
        echo "Llegan los datos del formulario";
        if (isset($_POST['txtDocumento'])) {
            $documento = $_POST['txtDocumento'];
            $nombre = $_POST['txtNombre'];
            $direccion = $_POST['txtDireccion'];
            $telefono = $_POST['txtTelefono'];
            $fechaNac = $_POST['txtfechaNac'];
            $estado = 1;
            $genero = $_POST['txtGenero'];
            $eps = $_POST['txtEPS'];
            $fkCodUsuario = $_POST['txtUsuario'];
            $email = $_POST['txtEmail'];
            //Se crea objeto paciente de los datos recibidos de la vista
            $pacienteBD = new pacienteModel(
                $documento,
                $nombre,
                $direccion,
                $telefono,
                $fechaNac,
                $estado,
                $genero,
                $eps,
                1,
                $email
            );

            $pacienteBD->save();
            $this->redirecTo("/paciente/index");
        }
    }
    public function update($id)
    {
        if (isset($_POST['txtDocumento'])) {
            $documento = $_POST['txtDocumento'];
            $nombre = $_POST['txtNombre'];
            $direccion = $_POST['txtDireccion'];
            $telefono = $_POST['txtTelefono'];
            $fechaNac = $_POST['txtfechaNac'];
            $estado = $_POST['txtEstado'];
            $genero = $_POST['txtGenero'];
            $eps = $_POST['txtEPS'];
            $email = $_POST['txtEmail'];
            //Se crea objeto paciente de los datos recibidos de la vista
            $pacienteBD = new pacienteModel(
                $documento,
                $nombre,
                $direccion,
                $telefono,
                $fechaNac,
                $estado,
                $genero,
                $eps,
                $fkCodUsuario=null,
                $email
            );

            $pacienteBD->updatePeople();
            $this->redirecTo("/paciente/index");
            
        }
    }
}
