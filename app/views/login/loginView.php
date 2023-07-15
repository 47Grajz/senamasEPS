<div class="container-content">
    <div class="content">




	<div class="contenedor">
	<div class="side">
		<div class="side-content">
		<h1>Eres Importante!</h1>
			<p>En SenamasEps, tu salud es nuestra prioridad. Confía en nuestro equipo médico dedicado y experimenta la excelencia en la atención médica. ¡Ven y descubre cómo podemos ayudarte a alcanzar la salud perfecta que mereces!"</p>
		</div>
			</div>

		<div class="form-content">
			
<form action="/login/init" method="post">

     <h1>Ingreso Senamas</h1>

<div class="row g-2">



<div class="col-md">
<div class="form-floating">
	<input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtUser" >
	<label for="floatingInputGrid">Usuario</label>
</div>
</div>


</div>

	<div class="row g-2">



<div class="col-md">
<div class="form-floating">
	<input type="password" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtPassword" >
	<label for="floatingInputGrid">Contraseña</label>
</div>
</div>


</div>




<div class="row g-2">

	 <div class="form-group-error">
	<p><?php echo (isset($errors)) ? $errors : "";  ?></p>
	</div> 


	</div>
	<div class="buttons">
	<button class="button" type="submit">Ingresar</button>
	<p>No tienes una cuenta? registrate <a href="/login/register"><span>Aqui</span></a></p>
	</div>



</form>




<!-- ------------- -->
		</div>

	</div>




</div> 
</div>