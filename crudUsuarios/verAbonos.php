<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$utilModelo2 = new utilModelo();
$util = new util();
//$util->validarRuta(0);
$clave = filter_input(INPUT_POST, 'found');
$conteo=0;

  $tabla = "abonos";
  $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_abonado=$clave");

    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
          $conteo++;
          echo"<tr class=\"osdo\">
            <td>$conteo</td>
            <td>$fila[2]</td>
            <td>$fila[4]</td>
          </tr>";
        }

    }

 ?>
