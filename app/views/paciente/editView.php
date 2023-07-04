

<div class="container-content">
  <div class="content">
    
<?php

if(isset($data["paciente"])):
    foreach($data["paciente"] as $item):
    ?>
    <h1>Actualizar Paciente</h1>
    <form action="/paciente/new" method="post">
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->documento}" ?>" name="txtDocumento" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->nombre}" ?>"  name="txtNombre" required>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->direccion}" ?>" name="txtDireccion" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->telefono}" ?>"  name="txtTelefono"  required> 
    </div>
    <div class="row">
    <div class="col">
      <input type="date" class="form-control" value="<?php echo "{$item->fechanacimiento}" ?>" name="txtfechaNac" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->estado}" ?>" name="txtEstado" required> 
    </div>
  </div>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->genero}" ?>" name="txtGenero" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->email}" ?>" name="txtEmail" required> 
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->FK_cod_usuario}" ?>" name="txtUsuario"  readonly>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo "{$item->documento}" ?>" >
    </div>
  </div>
  
    
  <button type="submit" class="btn btn-primary" style="margin-top:15px; background-color:purple; border:none;">Enviar</button>
  
</form>
<?php
        endforeach;
    endif;
        ?>

  </div>
</div>


