<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">REPARACION</div>
      <div class="card-body">
        <h5 class="card-title">DATOS DE REPARACION</h5>
        <form action="reparacionControlador.php" method="post">

         
         
         <div class="form-group col-md-12">
            <label for="inputIdReparacion">Id Reparacion </label>
            <input type="text" class="form-control" id="IdReparacion" name="IdReparacion" placeholder="IdReparacion" required="" pattern="[0-9]+">
          </div>



          
            <div class="form-group col-md-12">
              <label for="inputIdReporte">Id Reporte</label>
              <input type="text" class="form-control" id="IdReporte" name="IdReporte" placeholder="IdReporte" required="" pattern="[0-9]+">
            </div>



           

          <div class="form-group">
            <label for="inputObservacion">Observacion</label>
            <textarea class="form-control"  id="Observacion"name="Observacion" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">enviar</button>
        </form>
      </div>
    </div>
  </div>

</div>



<?php include_once "../componentes/pie.php"; ?>
