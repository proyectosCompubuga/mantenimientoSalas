<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(0);
?>
<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">REPORTAR DAÑO</div>
      <div class="card-body">
        <h5 class="card-title">DATOS DEL REPORTE</h5>
        <form action="registrarUsuariosControlador.php" method="post">

        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputState">Sala</label>
            <select id="sala" name="sala" required class="form-control">
              <option ></option>
              <?php
                      $tabla = "sala";
                      $result = $utilModelo2->consultarVariasTablas("*",$tabla,"1");
                        while ($fila = mysqli_fetch_array($result)) {
                            if ($fila != NULL) {                                   
                                echo"<option value='$fila[0]'>$fila[1]</option>";
                                   }
                                  }
                    ?>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="inputState">Equipo</label>
            <select id="equipo" name="equipo" required class="form-control">
              <option ></option>
              <?php
                      $tabla = "equipos";
                      $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_sala = 1");
                        while ($fila = mysqli_fetch_array($result)) {
                            if ($fila != NULL) {                                   
                                echo"<option value='$fila[0]'>$fila[1]</option>";
                                   }
                                  }
                    ?>
            </select>
          </div>
        </div>

        
          

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion de la falla</label>
            <textarea class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">registrar</button>
        </form>
      </div>
    </div>
  </div>

</div>


<?php include_once "../componentes/pie.php"; ?>