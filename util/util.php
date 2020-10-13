<?php
    /**
     * heruko: 420114024b50d*
     */
    include '../conexion.php';
    include_once "utilModelo.php";
    @session_start();


    class util
    {

        function validarRuta($tipoUsarioPermitido)
        {
            if (isset($_SESSION['usuario'])) {
                if ($_SESSION['usuario'][1] == $tipoUsarioPermitido) {

                } else {
                    switch ($_SESSION['usuario'][1]) {
                        case 0:// usuario administrador
                            header('Location: ../admin/adminVista.php');
                            exit();
                            break;
                        case 1://usuario tecnico

                            header('Location: ../docente/docenteVista.php');
                            exit();
                            break;
                        case 2://usuario monitor
                            header('Location: ../reportarIncidencias/reportarIncidencias.php');
                            exit();
                            break;

                        default:
                            // code...
                            break;
                    }

                }

            } else {

                //header('Location: ../index.php');
                exit();
            }
        }

        function validarElemento($tipoUsarioPermitido, $html)
        {
            if ($_SESSION['usuario'][1] == $tipoUsarioPermitido) {
                echo $html;
            }
        }

        function validarUsuarioActivo($codigoUsuario)
        {
            $utilModelo = new utilModelo();
            $result = $utilModelo->ultimaFechaPago($codigoUsuario);
            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
                    $fecha = date("d-m-Y", strtotime($fila['fechaMovimiento']));
                }
            }
            $fechaVencimiento = new DateTime($fecha);
            $intervalo = new DateInterval('P1M');
            $fechaVencimiento->add($intervalo);
            date_add($fechaVencimiento, date_interval_create_from_date_string('1 days'));

            $fechaActual = new DateTime("now");
//            echo $fechaVencimiento->format('Y-m-d') . "\n";
//            echo $fechaActual->format('Y-m-d') . "\n";
//            var_dump($fechaActual == $fechaVencimiento);
//            var_dump($fechaActual <= $fechaVencimiento);
//            die();
            if ($fechaActual <= $fechaVencimiento || $fechaActual == $fechaVencimiento) {
                $estado = "activo";
//                echo $estado;

            } else {
                $estado = "vencido";

            }
            $valores = array($fecha, $estado);
//            die();
            return $valores;


        }

        function mostrarCantidadReferidos($codigo)
        {

            $utilModelo2 = new utilModelo();
            $nombreCampo = array("codigoReferido");
            $valor = array($codigo);
            $tabla = "usuario";
            $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
            $referidos = "";
            $contadorReferidos = 0;
            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
                    $contadorReferidos++;
//            $saldo = $fila['saldo'];
                    $referidos = $referidos . ' <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">' . $fila['nombre'] . ' <br> <b>CODIGO: ' . $fila['codigo'] . '</b></span> </a>';
                }
            }
            return array($referidos, $contadorReferidos);
        }

        function encontrarProducto($codigo,$talla,$tabla,$codigoFactura)
        {
          $cantidad=0;
            $utilModelo2 = new utilModelo();
            $result = $utilModelo2->consultarVariasTablas("cantidad",$tabla,"id_producto = '$codigo' and talla=$talla and numFactura=$codigoFactura");
           $fila = mysqli_fetch_array($result);
            $cantidad=$fila[0];
            return $cantidad;
            //echo $result;
        }
        function encontrarTalla($codigo,$talla,$tabla)//devueve la cantidad que tiene cada ref por tallas
        {
          $cantidad=0;
            $utilModelo2 = new utilModelo();
            $result = $utilModelo2->consultarVariasTablas("cantidad",$tabla,"id_producto = '$codigo' and talla=$talla");
           $fila = mysqli_fetch_array($result);
            $cantidad=$fila[0];
            return $cantidad;
            echo $cantidad;

        }

        function mostrarNombre($codigo)
        {
          $nombreCliente="";

            $utilModelo2 = new utilModelo();
            $nombreCampo = array("identificacion");
            $valor = array($codigo);
            $tabla = "clientes";
            $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);

            while ($fila = mysqli_fetch_array($result)) {

                    $nombreCliente =$fila[1];

            }
            return $nombreCliente;
        }
        function mostrarNombreProducto($codigo)
        {
          $nombreCliente="";

            $utilModelo2 = new utilModelo();
            $nombreCampo = array("identificacion");
            $valor = array($codigo);
            $tabla = "entradas";
            $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);

            while ($fila = mysqli_fetch_array($result)) {

                    $nombreCliente =$fila[2];

            }
            return $nombreCliente;
        }

        function validarRangoUsuario($cantidadReferidos)
        {
//            $cantidadReferidos = $cantidadReferidos + 5;
            $utilModelo = new utilModelo();
            $tabla = "rangoUsuario";
            $meta = 0;
            $rango = "";
            $bandera = false;
            $c = 0;
            $result = $utilModelo->mostrarTodosRegistros($tabla);
            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
                    $c++;
                    if ($bandera) {
                        $meta = $fila['vp'];
                        $bandera = false;
                    }
                    if ($cantidadReferidos >= $fila['vp']) {
//                        echo "ingreso";
                        $rango = $fila['rango'];
                        $bandera = true;
                    }

                }
            }
//            echo $c;
//            echo $cantidadReferidos;
//            die();
            return array($meta, $rango);

        }

        function generarCodigo()
        {
            $longitud = 6;
            $key = '';
            $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
            $max = strlen($pattern) - 1;
            for ($i = 0; $i < $longitud; $i++) $key .= $pattern{mt_rand(0, $max)};
            return $key;
        }
        //Devuelve fecha actual
        function hoy()
        {

            return date("Y") . "-" . date("m") . "-" . date("d");
        }
        //devuelve ultimo dia del mes
        function ultimoDia() {
          $month = date('m');
          $year = date('Y');
          $day = date("d", mktime(0,0,0, $month+1, 0, $year));

          return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
        }
          //devuelve primer dia del mes
          function primerDia() {
              $month = date('m');
              $year = date('Y');
              return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
          }

        function registrarComision($codigo, $valorPago, $nivel)
        {
            $utilModelo = new utilModelo();
            $nombreCampo = array("codigo");
            $valor = array("$codigo");
            $tabla = "usuario";
            $result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor);
            $fila = mysqli_fetch_array($result);
            $codigoCabeza = $fila['codigoReferido'];

            if ($nivel <= 4 && $codigoCabeza != "") {
                $nombreCampo = array("nivel");
                $valor = array("$nivel");
                $tabla = "niveles";
                $result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor);
                $fila = mysqli_fetch_array($result);
                $porcentaje = $fila['porcentaje'] / 100;
                $valorComision = $valorPago * $porcentaje;
                $valores = $this->validarUsuarioActivo($codigoCabeza);
                if ($valores[1] == "activo") {
                    if ($nivel == 1) {
                        $utilModelo->aumentarSaldo($codigoCabeza, $valorComision);
                    } else {

                    }
                }
            }
        }


    }

?>
