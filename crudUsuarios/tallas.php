<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$utilModelo2 = new utilModelo();
$util = new util();
//$util->validarRuta(0);
$clave = filter_input(INPUT_POST, 'clave');
$ref=filter_input(INPUT_POST, 'found');



if ($clave==0) {
  $tabla = "tallas";
  $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_producto='$ref' and cantidad >=1 ");
    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
            echo '<option value="'. $fila[1] .'" data-tokens="'. $fila[1] .'">' . $fila[1] .'</option>';
        }
    }
  // code...
}else{
  $tabla = "productos";
  $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_prod='$ref'");
    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
            echo $fila[3];
        }
    }
}




 ?>
