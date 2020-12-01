<?php
@session_start();
//include 'usuarioModelo.php';
include '../util/utilModelo.php';
include '../util/util.php';
$util = new util();
$utilModelo = new utilModelo();
//valores del seaprado
$identificacion = filter_input(INPUT_POST,'identificacion');
$sala = filter_input(INPUT_POST,'sala');
$procesador = filter_input(INPUT_POST,'procesador');
$ram = filter_input(INPUT_POST,'ram');
$discoDuro = filter_input(INPUT_POST,'disco_duro');
$teclado = filter_input(INPUT_POST,'teclado');
$mouse = filter_input(INPUT_POST,'mouse');
$pantalla = filter_input(INPUT_POST,'pantalla');
$observacion = filter_input(INPUT_POST,'observacion');


//guardar
if(isset($_POST['guardar'])){
          	//$campos es el nombre de los campos tal cual aparece en la base de datos
          $campos = array("id_equipos","sala","procesador","ram","disco_duro","teclado","mouse","pantalla","observacion");
          //$valores son los valores a almacenar
          $valores = array("$identificacion","$sala","$procesador","$ram","$discoDuro","$teclado","$mouse","$pantalla","$observacion");
          //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
          $nombreDeTabla = "equipos";
          $utilModelo -> insertar($nombreDeTabla,$campos, $valores);
// $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudEquipos/equiposVista.php');
//modificar
}else if(isset($_POST['modificar'])){
	echo "abonar";

  $campos = array("numero_equipo", "sala", "procesador","ram'","disco_duro","teclado","mouse","pantalla","observacion");
  //$valores son los valores a almacenar
  $valores = array("$nombre","$direccion","$telefono","N/A");
  //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
  $nombreDeTabla = "equipos";
$utilModelo -> modificar($nombreDeTabla,$campos,$valores,'identificacion',$codigo);

$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudEquipos/equiposVista.php');
}
else{


    $nombreDeTabla = "equipos";
  $utilModelo -> eliminarRegistros($nombreDeTabla,"identificacion=$codigo");
  $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudEquipos/equiposVista.php');

}
	exit();
?>
