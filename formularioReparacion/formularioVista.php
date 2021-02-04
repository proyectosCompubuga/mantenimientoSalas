<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$utilModelo2 = new utilModelo();
$util = new util();
$util->validarRuta(0);

$idReporte = $_GET['id_reporte'];
$idEquipo = "";

include_once "../componentes/menuPrincipal.php"; ?>

<div class="container mt-5">
  <div class="col-md-12">
    <div class="card bg-light mb-3">
      <div class="card-header ">REPORTE</div>
      <div class="card-body ">
        <h5 class="card-title "></h5>
        <h2>Datos del reporte</h2>
        <form action="formularioControlador.php" method="post">
          <div class="row">

            <div class="col-md-4 imagen ">
              <img src="../img/teclado.jpg" class="card-img-top" alt="...">
            </div>

            <div class="col-md-6 informacion ">
              <?php
              //datos de la tabla reportes//

              $tabla = "reportes";
              $result = $utilModelo2->consultarVariasTablas("*", $tabla, "id_reporte=$idReporte");
              while ($fila = mysqli_fetch_array($result)) {

                if ($fila != NULL) {
                  $datos = $fila[0] . "||" .
                    $fila[1] . "||" .
                    $fila[2] . "||" .
                    $fila[3] . "||" .
                    $fila[4] . "||" .
                    $fila[5] . "||";
                  $idEquipo = $fila[2];

                  $tipo = "";
                  switch ($fila[5]) {
                    case 0:
                      $tipo = "ACTIVO";
                      break;
                    case 1:
                      $tipo = "EN PROCESO";
                      break;
                    case 2:
                      $tipo = "REPARADO";
                      break;
                    default:

                      break;
                  }

                  $result = $utilModelo2->consultarVariasTablas("nombre", "usuarios", "id_usuario=$fila[1]");
                  $nombre = mysqli_fetch_array($result);

                  $result = $utilModelo2->consultarVariasTablas("nombre_pc", "equipos", "id_equipo=$fila[2]");
                  $nombreEquipo = mysqli_fetch_array($result);
                  echo "
                                     <div class=\"row\">
                                     <div class=\"col-12 informacion border \">
                                     <div class=\"row my-2\">
                                        <div class=\"col-md-4 col-sm-4\">Numero Reporte:</div>
                                        <div class=\"col-md-8 col-sm-8\">$fila[0]</div>
                                     </div>
                                     <div class=\"row my-2\">
                                     <div class=\"col-md-4\">Nombre Usuario:</div>
                                     <div class=\"col-md-8 text-capitalize\">$nombre[0]</div>
                                     </div>
                                     <div class=\"row my-2\">
                                     <div class=\"col-md-4\">Nombre Equipo:</div>
                                     <div class=\"col-md-8 text-capitalize\">$nombreEquipo[0]</div>
                                     </div>
                                     <div class=\"row my-2\">
                                     <div class=\"col-md-4\">Fecha Reporte:</div>
                                     <div class=\"col-md-8\">$fila[4]</div>
                                     </div>
                                     <div class=\"row my-2\">
                                     <div class=\"col-md-4\">Estado:</div>
                                     <div class=\"col-md-8\">$tipo</div>
                                     </div>
                                     <div class=\"row my-2\">
                                     <div class=\"col-md-4\">Observacion:</div>
                                     <div class=\"col-md-8 text-capitalize\">$fila[3]</div>
                                     </div>                                      
                                     ";
                  // code...


                }
              }
              ?>
            </div>
          </div>
     

      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>


<div class="container mt-5">
  <div class="col-md-12">
    <div class="card bg-light mb-3">
      <div class="card-header ">REPORTE</div>
      <div class="card-body ">
        <h5 class="card-title "></h5>
        <h2>Datos del equipo</h2>
          <div class="row">

            <div class="col-md-4 imagen ">
              <img src="../img/comp1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6 informacion ">



              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Numero de quipo</th>
                      <th>Sala</th>
                      <th>Abreviatura</th>
                      <th>Procesador</th>
                      <th>Ram</th>
                      <th>Disco duro</th>
                      <th>Teclado</th>
                      <th>Mouse</th>
                      <th>Pantalla</th>
                      <th>Observacion</th>

                    </tr>
                  </thead>
                  <tbody>


                    <?php
                    //datos de la tabla equipos//
                    $saldoCero = 0;
                    $tabla = "equipos";
                    $result = $utilModelo2->consultarVariasTablas("*", $tabla, "id_equipo=$idEquipo");
                    while ($fila = mysqli_fetch_array($result)) {
                      if ($fila != NULL) {
                        $datos = $fila[0] . "||" .
                          $fila[1] . "||" .
                          $fila[2] . "||" .
                          $fila[3] . "||" .
                          $fila[4] . "||" .
                          $fila[5] . "||" .
                          $fila[6] . "||" .
                          $fila[7] . "||" .
                          $fila[8] . "||" .
                          $fila[9] . "||";
                        echo "<tr>

                                    <td>$fila[0]</td>
                                      <td>$fila[1]</td>
                                      <td>$fila[2]</td>
                                      <td>$fila[3]</td>
                                      <td>$fila[4]</td>
                                      <td>$fila[5]</td>
                                      <td>$fila[6]</td>
                                      <td>$fila[7]</td>
                                      <td>$fila[8]</td>
                                      <td>$fila[9]</td>
                                     

                                    </tr>";
                        // code...


                      }
                    }

                    ?>
                  </tbody>
                </table>


              </div>
            </div>
          </div>
      </div>
      <div class="form-group col-md-12">
      <h4>Estado</h4>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">Pendiente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="2">
            <label class="form-check-label" for="inlineRadio1">Reparado</label>
          </div>
        <h5 class="mt-4">Observacion </h5>
        <textarea class="form-control" id="observacion " name="Observacion" rows="4"></textarea>
      </div>

      <?php echo"<input name='idReporte' type='hidden' value='$idReporte'>";  ?>


      <div class="form-group col-md-6">
        <button name="guardar" type="submit" class="btn btn-primary">Enviar</button>
        <button type="button" onclick="javascript:window.print()">Imprimir</button>


        </form>
      </div>
    </div>
  </div>
</div>

</div>
<?php include_once "../componentes/pie.php"; ?>