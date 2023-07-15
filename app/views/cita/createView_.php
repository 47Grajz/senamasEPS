<div class="container-content">
  <div class="content">
    <h1>Nueva Cita</h1>
    <form action="/cita/create" method="post">
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Lugar" name="txtLugar" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Consultorio" name="txtConsultorio" required>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Doctor" name="txtDoctor" required>
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="Fecha de la cita" name="txtFechaCi" required> 
    </div>

    <div class="row">
    <div class="col">
      <input type="date" class="form-control" placeholder="Hora de la cita" name="txtHoraCi" required>
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="Fecha registro" name="txtFechaRegi" required>
    </div>



    <select class="form-select" aria-label="Default select example" name="txtDocumentoPaci" id="">
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



  
    
  <button type="submit" class="btn btn-primary" style="margin-top:15px; background-color:purple; border:none;">Guardar</button>
  
</form>
  </div>
</div>


