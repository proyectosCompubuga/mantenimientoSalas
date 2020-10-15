<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">REGISTRO DE EQUIPOS</div>
      <div class="card-body">
        <h5 class="card-title">Datos del equipo</h5>
         <form action="registrarEquiposControlador.php" method="post">


          <div class="form-group ">
            <label for="inputidentificacion1">identificacion del equipo</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="identificacion" required="" pattern="[0-11]+">
          </div>

          <div class="form-group ">
            <label for="inputidentificacion2">identificacion de la sala</label>
            <input type="text" class="form-control" id="identificacion2" name="identificacion2" placeholder="numero de la sala" required="" pattern="[0-11]+">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputSalas">Nombre del equipo</label>
              <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Nombre" required="" pattern="[a-zA-Z]+">
            </div>
          


            <div class="form-group col-md-6">
              <label for="inputProcesador">Procesador</label>
              <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Procesador" required="" pattern="[a-zA-Z]+">
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputRam">Ram</label>
              <input type="text" class="form-control" id="inputram" name="ram" pattern="[0-9]+" required="">
            </div>
          



            
              <div class="form-group col-md-6">
                <label for="inputDiscoDuro">disco duro</label>
                <input type="text" class="form-control" id="inputDiscoDuro" required="" name="disco duro">
              </div>
          </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputTeclado">teclado</label>
                <input type="text" class="form-control" id="inputTeclado" required="" name="teclado">
              </div>
            




                <div class="form-group col-md-6">
                  <label for="inputMouse">Mouse</label>
                  <input type="text" class="form-control" id="inputMouse" required="" name="mouse">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPantalla">Pantalla</label>
                  <input type="text" class="form-control" id="inputPantalla" required="" name="pantalla">
                </div>
              </div>

              <div class="form-group">
                  <label for="inputObservacion">observacion</label>
                  <textarea class="form-control" id="inputObservacion" rows="3"></textarea>
               </div>
            

                <!-- <div class="form-group col-md-6">
                  <label for="inputState">tipo de usuario</label>
                  <select id="cargo" name="cargo" class="form-control">
                    <option selected>tipo de usuario</option>
                    <option value="0">administrativo</option>
                    <option value="1">monitor</option>
                    <option value="2">tecnico reparador</option>

                  </select>
                </div> -->
            <button type="submit" class="btn btn-primary">registrar</button>
        </form>
      </div>
    </div>
  </div>

</div>


<?php include_once "../componentes/pie.php"; ?>
