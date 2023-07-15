

<div class="container-content">
  <div class="content">
    
<?php

if(isset($data["paciente"])):
    foreach($data["paciente"] as $item):
    ?>
    <h1>Actualizar Paciente</h1>

    <form action="/paciente/update/<?php echo "{$item->documento}" ?>" method="post">
   
    
    <div class="row g-2 ">



<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->documento}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtDocumento"  required>
    <label for="floatingInputGrid">Documento</label>
    </div>
</div>

<!-- ------------- -->


<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->nombre}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtNombre" required>
    <label for="floatingInputGrid">Nombre</label>
    </div>
</div>

      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="E
    email" class="form-control" value="<?php echo "{$item->email}" ?>" id="floatingInputGrid"  name="txtEmail" required>
    <label for="floatingInputGrid">Email</label>
    </div>
</div>




      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->telefono}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtTelefono" required>
    <label for="floatingInputGrid">Telefono</label>
    </div>
</div>

</div>





<div class="row g-2_input">



<div class="col-md">
    <div class="form-floating">
    <input type="date" class="form-control" value="<?php echo "{$item->fecha_nacimiento}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtfechaNac"  required>
    <label for="floatingInputGrid">fecha de nacimiento</label>
    </div>
</div>

<!-- ------------- -->


<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->estado}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtEstado" readonly>
    <label for="floatingInputGrid">estado</label>
    </div>
</div>

      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->eps}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtEPS" required>
    <label for="floatingInputGrid">Eps</label>
    </div>
</div>


       
<div class="col-md">
            <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="txtGenero">
              <?php $genero = $item->genero ?>
            <option value="" selected>Seleccionar una opción</option>
            <option value="M" <?php if ($genero == 'M') echo 'selected'; ?>>Masculino</option>
            <option value="F" <?php if ($genero == 'F') echo 'selected'; ?>>Femenino</option>
            <option value="O" <?php if ($genero == 'O') echo 'selected'; ?>>Otro</option>
        </select>
            <label for="floatingSelectGrid">Genero</label>
            </div>
        </div>

      <!-- ------------- -->


</div>

   <div>

   <div class="row g-2">
            <div class="col-md">
              <div class="form-floating">
              <input type="text" class="form-control" value="<?php echo "{$item->direccion}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDireccion" required>
              <label for="floatingInputGrid">Direccion</label>
              </div>
          </div>

                      <div class="col-md">
                <div class="form-floating">
                    
                </div>
            </div>

            <div class="col-md">
                <div class="form-floating">

                </div>
            </div>
   </div>
    
      <button class="button" type="submit">Actualizar</button>
   </div>
</form>
<?php
        endforeach;
    endif;
        ?>

  </div>
</div>


