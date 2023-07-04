<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Informacion de Pacientes-Usuarios</h1>
        <p><?php 
            foreach ($data['paciente'] as $item):
               echo "<br> <b> Documento: </b> $item->documento";
               echo "<br> <b> Nombre:</b>  $item->nombre";
               echo "<br> <b> Direccion:</b>  $item->direccion";
               echo "<br> <b> Telefono:</b>  $item->telefono";
               echo "<br> <b> Email:</b>  $item->email";
               echo "<br> <b> Fecha de Nacimiento:</b>  $item->fecha_nacimiento";
               echo "<br> <b> Estado:</b>  $item->estado";
               echo "<br> <b> Genero:</b>  $item->genero";
               echo "<br> <b> Eps:</b>  $item->eps";
               echo "<br> <b> Codigo de usuario:</b>  $item->fk_cod_usuario";
               echo "<br><b>-----------------------------------------------------------</b>";
            endforeach;
        ?></p>
    </div>
</body>
</html>