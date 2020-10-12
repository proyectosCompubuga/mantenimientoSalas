<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Calzado Karol Bucaramanga</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/estilos.css">
</head>


    <?php
        include "../componentes/menuPrincipal.php";
    ?>


          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Clientes</h1>
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">ingresar clientes <i class="fas fa-user"></i></div>
                      <!--aqui el form-->
                      <form class="user" action="clientesControlador.php" method="post">
                        <div class="row">
                          <div class="form-group col-sm-2">
                            <input type="number" required class="form-control" id="cedulaCliente" name="cedula" placeholder="Identificacion">
                            </div>
                          <div class="form-group col-md-3">
                            <input type="text" required class="form-control" id="nombresCliente" name="nombre" placeholder="Nombres">
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" required class="form-control" id="direccionCliente" name="direccion" placeholder="Direccion">
                          </div>
                          <div class="form-group col-md-2">
                            <input type="number" required class="form-control" id="telefonoCliente" name="telefono" placeholder="Telefono">
                          </div>
                          <div class="form-group col-md-2">
                                          <button type="submit" id="crearCliente" name="guardar" value="Crear"class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-user"></i>
                                            </span>
                                            <span class="text">Crear</span>
                                          </button>
                          </div>
                        </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Buscar Cliente</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Identificacion</th>
                      <th>Nombres</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th class="td-actions">EDITAR/ELIMINAR</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Identificacion</th>
                      <th>Nombres</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th class="td-actions">EDITAR/ELIMINAR</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $saldoCero=0;
                      $tabla = "usuarios";
                      $result = $utilModelo2->consultarVariasTablas("*",$tabla,"1");
                        while ($fila = mysqli_fetch_array($result)) {
                            if ($fila != NULL) {
                                  $datos=$fila[0]."||".
        			        					   $fila[1]."||".
        			        					   $fila[2]."||".
                                   $fila[3]."||";
                                     echo"<tr>

                                     <td>$fila[0]</td>
                                       <td>$fila[1]</td>
                                       <td>$fila[2]</td>
                                       <td>$fila[3]</td>
                                       <td class=\"td-actions\"><span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" > <a data-toggle=\"modal\" href=\"#modalEditar\" onclick=\"agregarForm('$datos');\" class=\"btn btn-small btn-primary\"> <i class=\"btn-icon-only fas fa-pen\"> </i></a></span><span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" > <a href=\"#modalAbonar\"  onclick=\"agregarForm('$datos');\" data-toggle=\"modal\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only fas fa-trash\"> </i></a></span></td>

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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" <a href="../seguridad/cerrarSesion.php">Cerrar Sesion</a>
        </div>
      </div>
    </div>
  </div>
  <!-- INICIO MODAL editar-->
  <!-- Modal -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="clientesControlador.php" method="post">
            <div class="row">
              <div class="form-group col-sm-12">
                <input type="hidden" name="cedula"id="cedulaClienteEH" value="">
                <input type="number" required disabled class="form-control" id="cedulaClienteE"  placeholder="Identificacion">
                </div>
              <div class="form-group col-md-12">
                <input type="text" required class="form-control" id="nombresClienteE" name="nombre" placeholder="Nombres">
              </div>
              <div class="form-group col-md-12">
                <input type="text" required class="form-control" id="direccionClienteE" name="direccion" placeholder="Direccion">
              </div>
              <div class="form-group col-md-12">
                <input type="number" required class="form-control" id="telefonoClienteE" name="telefono" placeholder="Telefono">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="modificar" class="btn btn-success">Modificar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIN MODAL editar-->
  <!-- INICIO MODAL abonar-->
  <!-- Modal -->
  <div class="modal fade" id="modalAbonar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="clientesControlador.php" method="post">
            <div class="form-group">
              <input class="form-control" type="hidden"  name="cedula" id="cedulaEliminar">
            </div>
            <div class="form-group">
              <h3>Seguro desea eliminar?</h3>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning " data-dismiss="modal">Cancelar</button>
          <button type="submit" name="eliminar" id="btnAbonoSeparado" class="btn btn-danger">Eliminar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php
        
    include_once "../componentes/pie.php";
  ?>
  <!-- FIN MODAL abonar-->
  <script type="text/javascript">


          function agregarForm(datos){
            d=datos.split("||");
            //valores editar
             $("#cedulaClienteEH").val(d[0]);
             $("#cedulaClienteE").val(d[0]);
             $("#nombresClienteE").val(d[1]);
             $("#direccionClienteE").val(d[2]);
             $("#telefonoClienteE").val(d[3]);
             //valores eliminar
             $("#cedulaEliminar").val(d[0]);
          }
         $(function () {
           $('[data-toggle="tooltip"]').tooltip()
         })
        </script>

</body>

</html>
