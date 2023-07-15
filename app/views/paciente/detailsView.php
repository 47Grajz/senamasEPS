
<div class="container-content">
  <div class="content">
    
<?php

if(isset($data["informacion"])):
    foreach($data["informacion"] as $item):
    ?>
   

  <div class="row g-2 details_input">



<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control details" value="<?php echo "{$item->usuario}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtNombre"  readonly>
    <label for="floatingInputGrid">Usuario</label>
    </div>
</div>

<!-- ------------- -->


<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control details" value="<?php echo "{$item->nombre}" ?>"  id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
    <label for="floatingInputGrid">Nombre</label>
    </div>
</div>

      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control details" value="<?php echo "{$item->documento}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
    <label for="floatingInputGrid">Documento</label>
    </div>
</div>


      <!-- ------------- -->

<div class="col-md">
    <div class="form-floating">
    <input type="text" class="form-control details" value="<?php echo "{$item->telefono}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
    <label for="floatingInputGrid">Telefono</label>
    </div>
</div>

</div>


<!-- ------------- -->         <!-- ------------- -->         <!-- ------------- -->         <!-- ------------- -->


<div class="row g-2 details_input">



<div class="col-md">
<div class="form-floating">
<input type="text" class="form-control details" value="<?php echo "{$item->email}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtNombre"  readonly>
<label for="floatingInputGrid">Email</label>
</div>
</div>

<!-- ------------- -->


<div class="col-md">
<div class="form-floating">
<input type="text" class="form-control details" value="<?php echo "{$item->fecha_nacimiento}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
<label for="floatingInputGrid">Fecha de Nacimiento</label>
</div>
</div>

<!-- ------------- -->

<div class="col-md">
<div class="form-floating">
<input type="text" class="form-control details" value="<?php echo "{$item->eps}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
<label for="floatingInputGrid">Eps</label>
</div>
</div>


<div class="col-md">
<div class="form-floating">
<input type="text" class="form-control details" value="<?php echo "{$item->genero}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
<label for="floatingInputGrid">Genero</label>
</div>
</div>

</div>



<!-- //---------------------------------------------- -->

<div class="row g-2 details_input">



<div class="col-md">
<div class="form-floating">
<input type="text" class="form-control details" value="<?php echo "{$item->tipo_usuario}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtNombre"  readonly>
<label for="floatingInputGrid">Tipo de usuario</label>
</div>
</div>

<!-- ------------- -->


<div class="col-md">
<div class="form-floating">
<input type="text" class="form-control details" value="<?php echo "{$item->estado}" ?>" id="floatingInputGrid" placeholder="name@example.com" name="txtDesc" readonly>
<label for="floatingInputGrid">Estado</label>
</div>
</div>

<!-- ------------- -->

<div class="col-md">
<div class="form-floating">

</div>
</div>


<div class="col-md">
<div class="form-floating">

</div>
</div>

</div>


<?php
        endforeach;
    endif;
        ?>

  </div>
</div>






