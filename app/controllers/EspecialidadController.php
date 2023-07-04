<?php 
namespace App\Controllers;

use App\Models\Especialidad;

class EspecialidadController extends BaseController{
     public function index(){
        $especialidad = new Especialidad();
        $especialidades = $especialidad->getAll();
        $data=[
            "citas"=> $especialidades,
            "cant_citas"=> count($especialidades)
        ];
        $this->render('especialidad/index', $data);
     }
}