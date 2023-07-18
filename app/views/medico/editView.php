

<div class="container-content">
  <div class="content">
    
<?php

if(isset($data["Medico"])):
    foreach($data["Medico"] as $item):
    ?>
    <h1>Actualizar Medico</h1>
    
    <form action="/medico/update/<?php echo "{$item->cod_medico}" ?>" method="post">
   
    
    <div class="row g-2 ">



<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->nombre}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtNombre"  required>
    <label for="floatingInputGrid">Nombre</label>
    </div>
</div>

<!-- ------------- -->


<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->documento}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtDocumento" required>
    <label for="floatingInputGrid">Documento</label>
    </div>
</div>

      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="date" class="form-control" value="<?php echo "{$item->fecha_nacimiento}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtfechaNac" required>
    <label for="floatingInputGrid">Fecha de nacimiento</label>
    </div>
</div>




      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->email}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtEmail" required>
    <label for="floatingInputGrid">Email</label>
    </div>
</div>

</div>





<div class="row g-2_input">



<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->perfil_profesional}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtPerfil"  required>
    <label for="floatingInputGrid">Perfil Profesional</label>
    </div>
</div>

<!-- ------------- -->


<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->fecha_ingreso}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtFecha_I" required>
    <label for="floatingInputGrid">Fecha ingreso</label>
    </div>
</div>

      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control" value="<?php echo "{$item->anios_experiencia}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtAExp" required>
    <label for="floatingInputGrid">Anios experiencia</label>
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
<?php 
            //     foreach($data['especialidad'] as $item):
            //     ?>
                

                               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="4" id="flexCheckDefault" name="especialidades[]">
           <label class="form-check-label" for="flexCheckDefault">
           <?php echo "Anastesiologia";?>
           </label>
         </div>
                               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="5" id="flexCheckDefault" name="especialidades[]">
           <label class="form-check-label" for="flexCheckDefault">
           <?php echo "Kinestesia";?>
           </label>
         </div>
                <?php
            //     endforeach
            //     ?>

            <input type="hidden" value="<?php echo "{$item->cod_medico}" ?>" name="txtCodMedico">
   <div>

    
      <button class="button" type="submit">Actualizar</button>
   </div>


</form>
<?php
        endforeach;
    endif;
        ?>

  </div>
</div>


