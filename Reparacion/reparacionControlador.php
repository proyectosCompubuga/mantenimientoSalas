<?php
@session_start();
include '../util/utilModelo.php';

$Id_Reparacion=$_POST["IdReparacion"];
$Id_Reporte=$_POST["IdReporte"];
$Observacion=$_POST["Observacion"];



    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("id_repa","id_reporte","observacion");
    //$valores son los valores a almacenar
    $valores = array("$Id_Reparacion","$Id_Reporte","$Observacion");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "reparacion";
    $utilModelo -> insertar($nombreDeTabla,$campos, $valores);

$_SESSION['mensajeOk']="ok";
// header('Location: ../reparacion/reparacionControlador.php');
exit();
?>
