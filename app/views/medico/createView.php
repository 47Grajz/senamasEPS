<div class="container-content">
  <div class="content">
    <h1>Añadir Medico</h1>
    <form action="/medico/new" method="post" class="form-floating">

    <!-- ------------------------ -->
<div class="row g-2">



  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtNombre" required>
      <label for="floatingInputGrid">Nombre</label>
    </div>
  </div>

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtDocumento" required>
      <label for="floatingInputGrid">Documento</label>
    </div>
  </div>


    <!-- ------------- -->

    <div class="col-md">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingInputGrid" placeholder="Direccion" name="txtfechaNac" required>
      <label for="floatingInputGrid">fecha de nacimiento</label>
    </div>
  </div>



<!-- ----------------------- -->




</div>





  <!-- ------------- -->

  <div class="row g-2">

  <div class="row g-2">




<div class="col-md">
  <div class="form-floating">
    <input type="date" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtFecha_I" required>
    <label for="floatingInputGrid">Fecha de ingreso</label>
  </div>
</div>




<div class="col-md">
  <div class="form-floating">
    <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtAExp">
    <label for="floatingInputGrid">Años de experiencia</label>
  </div>
</div>


<!-- 
<div class="col-md">
  <div class="form-floating">
    <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtcodUser">
    <label for="floatingInputGrid">Codigo de usuario</label>
  </div>
</div> -->



<div class="col-md">
  <div class="form-floating">
    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtEmail" >
    <label for="floatingInputGrid">Email</label>
  </div>
</div>


</div>




<div class="row g-2">


            
        <div class="col-md">
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtPerfil" required>
            <label for="floatingInputGrid">Perfil Profesional</label>
            </div>
        </div>


        
        <div class="col-md">
            <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="txtGenero">
                <option selected>Seleccionar una opcion</option>
                <option value="M">Maculino</option>
                <option value="F">Femenino</option>
                <option value="O">Otro</option>
            </select>
            <label for="floatingSelectGrid">Genero</label>
            </div>
        </div>


    </div>


    <h1 class="especialidades_tittle">Especialidades</h1>
    
    <!-- ------------- -->

    <div class="especialidades" >


    <?php 
                foreach($data['especialidad'] as $item):
                ?>
                

                 <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?php echo $item->cod_especialidad?>" id="flexCheckDefault" name="especialidades[]">
                <label class="form-check-label" for="flexCheckDefault">
                <?php echo $item->nombre?>
                </label>
              </div>

                <?php
                endforeach
                ?>

          
    </div>


    <div>
            
            <button class="button" type="submit">Guardar</button>
        </div>

</div>






  

  <!-- ------------- -->






</div>



<input type="hidden" name="txtCodUser" value="<?php echo $_SESSION['cod_usuario']; ?>" >


</form>


  </div>
</div>


