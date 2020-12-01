<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">REGISTRO DE EQUIPOS</div>
      <div class="card-body">
        <h5 class="card-title">Datos del equipo</h5>
         <form action="../crudEquipos/equiposControlador.php" method="post">


          <div class="form-group ">
            <label for="iputidentificacio1">identificacion del equipo</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion1" placeholder="identificacion" required="" >
          </div>

          <div class="form-group ">
            <label for="iputsala">identificacion de la sala</label>
            <input type="text" class="form-control" id="identificacions" name="identificacion2" placeholder="numero de la sala" required="" >
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="iputnombrepc">Nombre del equipo</label>
              <input type="text" class="form-control" id="nombre" name="nombre1" placeholder="Nombre" required="">
            </div>
          


            <div class="form-group col-md-6">
              <label for="iputprocesador">Procesador</label>
              <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Procesador" required="">
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="iputram">Ram</label>
              <input type="text" class="form-control" id="ram" name="ram" required="">
            </div>
          



            
              <div class="form-group col-md-6">
                <label for="discoduro">disco duro</label>
                <input type="text" class="form-control" id="discoduro" required="" name="disco duro">
              </div>
          </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="iputteclado">teclado</label>
                <input type="text" class="form-control" id="teclado" required="" name="teclado">
              </div>
            




                <div class="form-group col-md-6">
                  <label for="iputmouse">Mouse</label>
                  <input type="text" class="form-control" id="mouse" required="" name="mouse">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="iputpantalla">Pantalla</label>
                  <input type="text" class="form-control" id="pantalla" required="" name="pantalla">
                </div>
              </div>

              <div class="form-group">
                  <label for="iputobservacion">observacion</label>
                  <textarea class="form-control" id="observacion" name="observacion" rows="3"> </textarea>
               </div>
        


            <button name="guardar" type="submit" class="btn btn-primary">registrar</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php include_once "../componentes/pie.php"; ?>



