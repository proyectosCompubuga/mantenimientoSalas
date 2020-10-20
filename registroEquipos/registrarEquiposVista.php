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
            <label for="id_equipo">identificacion del equipo</label>
            <input type="text" class="form-control" id="id_equipo" name="identificacion" placeholder="identificacion" required="" >
          </div>

          <div class="form-group ">
            <label for="id_sala">identificacion de la sala</label>
            <input type="text" class="form-control" id="id_sala" name="identificacion2" placeholder="numero de la sala" required="" >
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombre_pc">Nombre del equipo</label>
              <input type="text" class="form-control" id="nombre_pc" name="nombre1" placeholder="Nombre" required="">
            </div>
          


            <div class="form-group col-md-6">
              <label for="procesador">Procesador</label>
              <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Procesador" required="">
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="ram">Ram</label>
              <input type="text" class="form-control" id="ram" name="ram" required="">
            </div>
          



            
              <div class="form-group col-md-6">
                <label for="disco_duro">disco duro</label>
                <input type="text" class="form-control" id="disco_duro" required="" name="disco duro">
              </div>
          </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="teclado">teclado</label>
                <input type="text" class="form-control" id="teclado" required="" name="teclado">
              </div>
            




                <div class="form-group col-md-6">
                  <label for="mouse">Mouse</label>
                  <input type="text" class="form-control" id="mouse" required="" name="mouse">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="pantalla">Pantalla</label>
                  <input type="text" class="form-control" id="pantalla" required="" name="pantalla">
                </div>
              </div>

              <div class="form-group">
                  <label for="observacion">observacion</label>
                  <textarea class="form-control" id="observacion" rows="3"></textarea>
               </div>
            


            <button type="submit" class="btn btn-primary">registrar</button>
        </form>
      </div>
    </div>
  </div>

</div>



