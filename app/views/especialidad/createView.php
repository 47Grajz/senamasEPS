<div class="container-content">
  <div class="content">
    <h1>Añadir Medico</h1>
    <form action="/especialidad/new" method="post" class="form-floating">

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
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" required>
                <label for="floatingInputGrid">Descripcion</label>
                </div>
            </div>

</div>


    <div>
        <button class="button" type="submit">Guardar</button>
    </div>



</div>

<input type="hidden" name="txtCodUser" value="<?php echo $_SESSION['cod_usuario']; ?>" >

</form>
  </div>
</div>


