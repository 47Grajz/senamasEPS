<div class="container-content">
  <div class="content">
    <h1>Añadir Paciente</h1>
    <form action="/paciente/new" method="post" class="form-floating">

    <!-- ------------------------ -->
<div class="row g-2">



  <div class="col-md">
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtDocumento" required>
      <label for="floatingInputGrid">Documento</label>
    </div>
  </div>

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtNombre" required>
      <label for="floatingInputGrid">Nombre</label>
    </div>
  </div>


    <!-- ------------- -->

    <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="Direccion" name="txtDireccion" required>
      <label for="floatingInputGrid">Direccion</label>
    </div>
  </div>

</div>

<!-- ----------------------- -->

<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtTelefono" required >
      <label for="floatingInputGrid">Telefono</label>
    </div>
  </div>

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtfechaNac" required>
      <label for="floatingInputGrid">Fecha de nacimiento</label>
    </div>
  </div>


    <!-- ------------- -->


</div>



<div class="row g-2">



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

  

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtEPS">
      <label for="floatingInputGrid">Eps</label>
    </div>
  </div>


    <!-- ------------- -->

    <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtEmail" >
      <label for="floatingInputGrid">Email</label>
    </div>
  </div>

</div>


<button class="button" type="submit">Guardar</button>

</form>
  </div>
</div>


