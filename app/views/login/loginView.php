<div class="container-content">
    <div class="content">

<form action="/login/init" method="post">


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

			<button class="button" type="submit">Guardar</button>

</form>




<!-- ------------- -->


</div> 
</div>