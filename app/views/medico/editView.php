<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
</head>
<body>
<?php
    if(isset($data["Medico"])):
        foreach($data["Medico"] as $item):
        ?>
        <hr>
        <form action="/medico/update" method="post">    
           <br> <label for="">Codigo del medico</label>
           <br> <input readonly name="txtCodMedico" type="number" value="<?php echo "{$item->cod_medico}" ?>">
           <br> <label for="">Nombre</label>
           <br> <input name="txtNombre" type="text" value="<?php echo "{$item->nombre}"?>">
           <br> <label for="">Documento</label>
           <br> <input name="txtDocumento" type="text" value="<?php echo "{$item->documento}"?>">
           <br> <label for="">Fecha de nacimiento</label>
           <br> <input name="txtfechaNac" type="date" value="<?php echo "{$item->fecha_nacimiento}"?>">
           <br> <label for="">Genero</label>
           <br> <input name="txtGenero" type="text" value="<?php echo "{$item->genero}"?>">
           <br> <label for="">Email</label>
           <br> <input name="txtEmail" type="text" value="<?php echo "{$item->email}"?>">
           <br> <label for="">Perfil profesional</label>
           <br> <input name="txtPerfil" type="text" value="<?php echo "{$item->perfil_profesional}"?>">
           <br> <label for="">Fecha de ingreso</label>
           <br> <input name="txtFecha_I" type="date" value="<?php echo "{$item->fecha_ingreso}"?>">
           <br> <label for="">Años de experiencia</label>
           <br> <input name="txtAExp" type="number" value="<?php echo "{$item->anios_experiencia}"?>">
           <br> <label for="">Codigo de usuario</label>
           <br> <input readonly name="txtCodUser" type="text" value="<?php echo "{$item->fk_cod_usuario}"?>">
           <br> <input type="submit" value="Actualizar datos">
        </form>
        <?php
        endforeach;
    endif;
        ?>
</body>
</html>