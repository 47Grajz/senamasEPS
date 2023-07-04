<?php

namespace App\Controllers;

use App\Models\usuarioModel;

class UsuarioController
{
    public function test()
    {
        $usuario = new usuarioModel();

        $usuarios=$usuario->getAll();
        echo"<pre>";
        $data=[
            "usuarios"=> $usuarios,
            "cant_usuarios"=> count($usuarios)
        ];
        require_once '../app/views/usuario/test.php';

        /*foreach ($pacientes as $item){
            echo "<br><hr> Documento: {$item->documento}";
            echo "<br> Nombre: {$item->nombre}";
            echo "<br> Direccion: {$item->direccion}";
            echo "<br> Telefono: {$item->telefono}";
            echo "<br> Email: {$item->email}";
            echo "<br> Genero: {$item->genero}";
            echo "<br> Fecha Nacimiento: {$item->fecha_nacimiento}";
            echo "<br> Estado: {$item->estado}";
            echo "<br> EPS: {$item->eps}";
        }
        echo "</pre>";*/
    }
}