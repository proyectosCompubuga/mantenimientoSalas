<?php
@session_start();
//include 'usuarioModelo.php';
include '../util/utilModelo.php';
include '../util/util.php';
$util = new util();
$utilModelo = new utilModelo();
//valores del seaprado
$Nombre_Sala= filter_input(INPUT_POST,'NombreSala');
$Capacidad_Equipos= filter_input(INPUT_POST,'CapacidadEquipos'); 
$Cantidad_Equipos= filter_input(INPUT_POST,'CantidadEquipos');
$Abreviatura= filter_input(INPUT_POST,'Abreviatura');






//guardar
if(isset($_POST['guardar'])){
          	//$campos es el nombre de los campos tal cual aparece en la base de datos
            $campos = array("NombreSala", "CapacidadEquipos", "CantidadEquipos","Abreviatura");
          //$valores son los valores a almacenar
          $valores = array("$Nombre_Sala","$Capacidad_Equipos","$Cantidad_Equipos","$Abreviatura");
          //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
          $nombreDeTabla = "sala";
          $utilModelo -> insertar($nombreDeTabla,$campos, $valores);
$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudSalas/salasVista.php');
//modificar
}else if(isset($_POST['modificar'])){
	echo "abonar";

  $campos = array("nombre", "telefono","password", "email", "tipo_usuario");
  //$valores son los valores a almacenar
  $valores = array("$nombres","$tel","$password","$Email","$cargo");
  //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
  $nombreDeTabla = "usuarios";
$utilModelo -> modificar($nombreDeTabla,$campos,$valores,'id_usuario',$identificacion=79);

$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudSalas/salasVista.php');
}
else{


    $nombreDeTabla = "sala";
  $utilModelo -> eliminarRegistros($nombreDeTabla,"identificacion=$identificacion");
  $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudSalas/salasVista.php');

}
	exit();
?>
