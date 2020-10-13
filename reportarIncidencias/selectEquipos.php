<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$utilModelo2 = new utilModelo();
$util = new util();
//$util->validarRuta(0);
$clave = filter_input(INPUT_POST, 'sala');

  $tabla = "equipos";
  $result = $utilModelo2->consultarVariasTablas("*",$tabla,"id_sala=$clave");


    $cadena="
    <label for='inputState'>Equipo</label>
			<select class='form-control' id='equipos' name='equipos'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

 ?>
	