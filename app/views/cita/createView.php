<div class="container-content">
  <div class="content">
    <h1>Añadir Cita</h1>
    <form action="/cita/create" method="post" class="form-floating">

    <!-- ------------------------ -->
<div class="row g-2">



  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtLugar" required>
      <label for="floatingInputGrid">Lugar</label>
    </div>
  </div>

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtConsultorio" required>
      <label for="floatingInputGrid">Consultorio</label>
    </div>
  </div>


    <!-- ------------- -->

    <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="Direccion" name="txtDoctor" required>
      <label for="floatingInputGrid">Doctor</label>
    </div>
  </div>

</div>

<!-- ----------------------- -->

<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtFechaCi" required >
      <label for="floatingInputGrid">Fecha de la cita</label>
    </div>
  </div>

  <!-- ------------- -->


  <div class="col-md">
    <div class="form-floating">
      <input type="time" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="txtHoraCi" required>
      <label for="floatingInputGrid">Hora de la cita</label>
    </div>
  </div>


    <!-- ------------- -->


</div>



<div class="row g-2">

    



  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="txtDocumentoPaci">
      <option selected value="">Seleccionar Paciente</option>
      <?php 
                foreach($data['pacientes'] as $item):
                ?>
                
                <option value="<?php echo $item->documento?>">
                    <?php echo $item->documento."-".$item->nombre?>
                </option>
                <?php
                endforeach
                ?>
      </select>
      <label for="floatingSelectGrid">Paciente Asociado</label>
    </div>
  </div>

  

  <!-- ------------- -->


  

</div>


<button class="button" type="submit">Guardar</button>

</form>
  </div>
</div>


