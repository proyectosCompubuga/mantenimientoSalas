<?php
@session_start();
include '../util/utilModelo.php';
$util = new util();

$Nombre_Sala=$_POST["NombreSala"];
$Capacidad_Equipos=$_POST["CapacidadEquipos"];
$Cantidad_Equipos=$_POST["CantidadEquipos"];
$Abreviatura=$_POST["Abreviatura"];


//guardar
    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("NombreSala", "CapacidadEquipos","CantidadEquipos","Abreviatura");
    //$valores son los valores a almacenar
    $valores = array("$Nombre_Sala","$Capacidad_Equipos","$Cantidad_Equipos","$Abreviatura");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "sala";
    $utilModelo -> insertar($nombreDeTabla,$campos,$valores);

$_SESSION['mensajeOk']="ok";
//header('Location: ../formularioSalas/formularioSalasControlador.php');

exit();
?>
