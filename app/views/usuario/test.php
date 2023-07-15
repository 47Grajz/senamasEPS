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
        <h1>Lista Pacientes</h1>
        <p><?php echo "La cantidad de pacientes es: ". $data['cant_usuarios'] ?></p>
        <?php
    if(isset($data["usuarios"])):
        foreach($data["usuarios"] as $item):
        ?>
        <hr>
        <br>Documento:<?php echo "{$item->cod_usuario}" ?>;
        <br> Nombre: <?php echo "{$item->nombre}"?>;
        <br> Direccion:<?php echo "{$item->usuario}"?>;
        <br> Telefono: <?php echo "{$item->password}"?>;
        <br> Email: <?php echo "{$item->estado}"?>;
        <br> Genero: <?php echo "{$item->fecha_creacion}"?>;
        <br> Fecha Nacimiento: <?php echo "{$item->tipo_usuario}"?>;
        <?php
        endforeach;
    endif;
        ?>

    </div>
</body>
</html>