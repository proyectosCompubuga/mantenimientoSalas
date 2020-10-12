<?php
@session_start();
//include 'usuarioModelo.php';
include '../util/utilModelo.php';
include '../util/util.php';
$util = new util();
$utilModelo = new utilModelo();
//valores del seaprado
$codigo = filter_input(INPUT_POST,'cedula');
$nombre = filter_input(INPUT_POST,'nombre');
$direccion = filter_input(INPUT_POST,'direccion');
$telefono = filter_input(INPUT_POST,'telefono');


//guardar
if(isset($_POST['guardar'])){
          	//$campos es el nombre de los campos tal cual aparece en la base de datos
          $campos = array("identificacion", "nombre", "direccion","telefono","email");
          //$valores son los valores a almacenar
          $valores = array("$codigo","$nombre","$direccion","$telefono","N/A");
          //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
          $nombreDeTabla = "clientes";
          $utilModelo -> insertar($nombreDeTabla,$campos, $valores);
$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudClientes/clientesVista.php');
//modificar
}else if(isset($_POST['modificar'])){
	echo "abonar";

  $campos = array("nombre", "direccion","telefono","email");
  //$valores son los valores a almacenar
  $valores = array("$nombre","$direccion","$telefono","N/A");
  //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
  $nombreDeTabla = "clientes";
$utilModelo -> modificar($nombreDeTabla,$campos,$valores,'identificacion',$codigo);

$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudClientes/clientesVista.php');
}
else{


    $nombreDeTabla = "clientes";
  $utilModelo -> eliminarRegistros($nombreDeTabla,"identificacion=$codigo");
  $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudClientes/clientesVista.php');

}
	exit();
?>
