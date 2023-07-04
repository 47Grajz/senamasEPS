<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->layout = "login_layout";
    }
    public function initLogin()
    {
        if (isset($_POST['txtUser']) && isset($_POST['txtPassword'])){
            $usuario = trim($_POST['txtUser'] ?? "");
            $password = trim($_POST['txtPassword'] ?? "");
            $errors = "";
            if ($usuario == "" || $password == "") {
                $errors = "El usuario y/o contraseña no puede estar vacios";
                $data = [
                    'errors' => $errors
                ];
                $this->render("/login/login", $data);
            }else{
                $obj = new UserModel(null,$usuario,$password);

                if($obj->ValidarLogin()){
                    header("Location:/paciente/index");
                }else{
                    $errors = "Usuario o contraseña incorrectos";
                    $data = [
                        'errors' => $errors
                    ];
                    $this->render('/login/login', $data);
                }   
            }
        } else {
            $this->render("/login/login");
        }
    }
    public function Logout()
    {
        session_destroy();
        header("location:/login/init");
    }
}