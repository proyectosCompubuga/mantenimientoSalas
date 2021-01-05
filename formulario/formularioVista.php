<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(0);

    $idReporte=$_GET['id_reporte'];
    $idEquipo="";

 include_once "../componentes/menuPrincipal.php"; ?>

<div class="container mt-5">
  <div class="col-md-12">
    <div class="card bg-light mb-3">
      <div class="card-header ">REPORTE</div>
      <div class="card-body ">
        <h5 class="card-title "></h5>
        <h2>Datos del reporte</h2>
        <form action="reparacionControlador.php" method="post"> 
          <div class="row">
          
            <div class="col-md-4 imagen ">
            <img src="../img/teclado.jpg" class="card-img-top" alt="...">
            </div>
  
          <div class="col-md-6 informacion ">
            <table>
              <tr>
                <td>Reporte:</td>
                           </tr>
              <tr>
                <td>Nombre Usuario:</td>
                            </tr>
              <tr>
                <td>Nombre Equipo:</td>
                              </tr>
              <tr>
                <td>Observacion:</td>
                              </tr>
              <tr>
                <td>Fecha Reportes:</td>
                             </tr>
              <tr>
                <td>estado:</td>
                             </tr>
            </table>
          </div>
          </div>   
          
          </form>



        
                  
                                
                      
                     
                    <?php
                    //datos de la tabla reportes//
                    
                      $tabla = "reportes";
                      $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_reporte=$idReporte");
                        while ($fila = mysqli_fetch_array($result)) {
                      
                            if ($fila != NULL) {
                                  $datos=$fila[0]."||".
        			        					   $fila[1]."||".
                                   $fila[2]."||".
                                   $fila[3]."||".
                                   $fila[4]."||".
                                   $fila[5]."||";
                                   $idEquipo=$fila[2];

                                   $tipo="";
                                   switch ($fila[5]) {
                                    case 0:
                                      $tipo="ACTIVO";
                                      break;
                                    case 1:
                                      $tipo="EN PROCESO";
                                      break;
                                    case 2:
                                      $tipo="REPARADO";
                                      break;
                                    default:
                                      
                                      break;
                                  }

                                   $result = $utilModelo2->consultarVariasTablas("nombre","usuarios","id_usuario=$fila[1]");
                                   $nombre =mysqli_fetch_array($result);

                                   $result = $utilModelo2->consultarVariasTablas("nombre_pc","equipos","id_equipo=$fila[2]");
                                   $nombreEquipo =mysqli_fetch_array($result);
                                     echo"
                                     <div class=\"row\">
                                     <div class=\"col-md-6 informacion \">

                                     <div class=\"row\">
                                     <label for=\"\">reporte:</label>
                                     <label for=\"\"> <h6>$fila[0]</h6></label>
                                     </div>
                                     <div class=\"row\">
                                     <label for=\"\">Nombre Usuario:</label>
                                     <label for=\"\">$nombre[0]</label>
                                     </div>
                                     <div class=\"row\">
                                     <label for=\"\">Nombre equipo:</label>
                                     <label for=\"\">$nombreEquipo[0]</label>
                                     </div>
                                     <div class=\"row\">
                                     <label for=\"\">observacion:</label>
                                     <label for=\"\">$fila[3]</label>
                                     </div>
                                     <div class=\"row\">
                                     <label for=\"\">fecha reporte:</label>
                                     <label for=\"\">$fila[4]</label>
                                     </div>
                                     <div class=\"row\">
                                     <label for=\"\">estado:</label>
                                     <label for=\"\">$tipo</label>
                                     </div>

                                      
                                     ";
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
        <!-- /.container-fluid -->

      </div>


      <div class="container mt-5">
  <div class="col-md-12">
    <div class="card bg-light mb-3">
      <div class="card-header ">REPORTE</div>
      <div class="card-body ">
        <h5 class="card-title "></h5>
        <h2>Datos del equipo</h2>
        <form action="reparacionControlador.php" method="post"> 
          <div class="row">
          
            <div class="col-md-4 imagen ">
            <img src="../img/comp1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6 informacion ">
  


              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
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
                     $saldoCero=0;
                     $tabla = "equipos";
                     $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_equipo=$idEquipo");
                       while ($fila = mysqli_fetch_array($result)) {
                           if ($fila != NULL) {
                                 $datos=$fila[0]."||".
                                  $fila[1]."||".
                                  $fila[2]."||".
                                  $fila[3]."||".
                                  $fila[4]."||".
                                  $fila[5]."||".
                                  $fila[6]."||".
                                  $fila[7]."||".
                                  $fila[8]."||".
                                  $fila[9]."||";
                                    echo"<tr>

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
        <label class="checkbox-inline"><input type="checkbox" value="">Pendiente</label>
         <label class="checkbox-inline"><input type="checkbox" value="">Reparado</label>
         <div class="form-group col-md-14">
            <label for="">observacion </label>
            <textarea class="form-control"  id="observacion "name="Observacion" rows="4"></textarea>
          </div>

          <div class="form-group col-md-6"> 
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="button"  onclick="javascript:window.print()">Imprimir</button>
                
                
        </form>
      </div>
    </div>
  </div>
</div>





        <!-- /.container-fluid -->

      </div>


      
         
         
       
        
          
         
           

            


<?php include_once "../componentes/pie.php"; ?>
