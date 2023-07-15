<?php

namespace App\Controllers;

use App\Models\UserModel;


class userController extends BaseController
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
        $from = 'usuario';
        $where = 'cod_usuario';
        $usuario = new UserModel();
        $usuario->eliminar($from,$where,$doc);
        $usuasrios = $usuario->getAll();

         $data = [
            "usuarios" => $usuarios,
            "cant_usuarios" => count($usuarios)
         ];
        $this->redirecTo("/usuario/index");
    }
    
    public function edit($id)
    {   
        $where = 'cod_usuario';
        $usuario = new UserModel();
        $newUsr = $usuario->select($where,$id);

        if ($newUsr != null) {
            $data = [
                "paciente" => $newUsr
            ];
            $this->render("user/edit",$data);
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
        $usuario = new UserModel();

        $usuarios = $usuario->getAll();
        
        $data = [
            "usuarios" => $usuarios,
            "cant_usuarios" => count($usuarios)
        ];
        $this->render("/usuario/index",$data);
    }


    public function create(){
        $this->render('usuario/create');
    }

    public function new()
    {
        if(isset($_POST['txtUsuario'])) {
            $usuario = $_POST['txtUsuario'];
            $contrasena = $_POST['txtContrasena'];
            $estado = 'activo';
            $hora = date("Y-m-d H:i:s");
            $create_at = $hora;
            $tipo_usuario = $_POST['txtTipo'];
            //Se crea objeto paciente de los datos recibidos de la vista
            $usuarioBD = new UserModel(
                $cod_usuario=null,
                $usuario,
                $contrasena,
                $estado,
                $tipo_usuario,
                $create_at
            );

            $usuarioBD->save();
            $this->redirecTo("/usuario/index");
        }
        
    }

    public function update()
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
            //$fkCodUsuario = "";
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

                $email
            );

            $pacienteBD->updatePeople();
            
        }
    }

}
