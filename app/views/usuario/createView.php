<div class="container-content">
  <div class="content">
    <h1>Añadir Usuario</h1>
    <form action="/usuario/new" method="post" class="form-floating">

    <!-- ------------------------ -->
<div class="row g-2">



  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtUsuario" required>
      <label for="floatingInputGrid">Nombre de Usuario</label>
    </div>
  </div>

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtContrasena" required>
      <label for="floatingInputGrid">Contrasena</label>
    </div>
  </div>

  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="txtTipo">
        <option selected>Seleccionar una opcion</option>
        <option value="Paciente">Paciente</option>
        <option value="Medico">Medico</option>
      </select>
      <label for="floatingSelectGrid">Tipo de Usuario</label>
    </div>
  </div>

  









</form>

<div>
<button class="button" type="submit">Guardar</button>
</div>


  </div>
</div>


