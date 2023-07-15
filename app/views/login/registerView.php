<div class="container-content">
    <div class="content">




	<div class="contenedor contenedorlogin">
	<div class="side">
		<div class="side-content">
		<h1>Eres Importante!</h1>
			<p>En SenamasEps, tu salud es nuestra prioridad. Confía en nuestro equipo médico dedicado y experimenta la excelencia en la atención médica. ¡Ven y descubre cómo podemos ayudarte a alcanzar la salud perfecta que mereces!"</p>
		</div>
			</div>

		<div class="form-content formregister">
			
<form action="/login/register" method="post">

     <h1>Registro Senamas</h1>

<div class="row g-2">



<div class="col-md">
<div class="form-floating">
	<input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtUsuario" >
	<label for="floatingInputGrid">Usuario</label>
</div>
</div>


</div>

	<div class="row g-2">



<div class="col-md">
<div class="form-floating">
	<input type="password" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtContrasena" >
	<label for="floatingInputGrid">Contraseña</label>
</div>
</div>


</div>


<div class="row g-2">



  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="txtTipo">
        <option selected>Seleccionar una opcion</option>
        <option value="paciente">Paciente</option>
        <option value="medico">Medico</option>
      </select>
      <label for="floatingSelectGrid">Genero</label>
    </div>
  </div>




<div class="row g-2">

	 <div class="form-group-error">
	<p><?php echo (isset($errors)) ? $errors : "";  ?></p>
	</div> 


	</div>
	<div class="buttons">
	<button class="button" type="submit">Registrarse</button>
	<p>Tienes cuenta? <a href="/login/init"><span>Ingresa</span></a></p>
	</div>



</form>




<!-- ------------- -->
		</div>

	</div>




</div> 
</div>