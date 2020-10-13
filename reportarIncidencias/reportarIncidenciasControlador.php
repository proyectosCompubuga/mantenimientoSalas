<?php
@session_start();
include '../util/utilModelo.php';

$identificacion=$_POST['identificacion'];
// $nombres=$_POST['nombre'] ." ". $_POST['apellido'];
$idusuario$=$_POST['id_usuario'];
$idsala=$_POST['id_sala'];
$idrepa=0;
$fechareporte=date(d/m/y);
$observacion=$_POST['observacion'];
$estado=0;


    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("id_reporte", "id_usuario","id_sala" "id_repa","fecha_reporte", "observacion", "estado");
    //$valores son los valores a almacenar
    $valores = array("$identificacion","$idsala","$idrepa","$fechareporte","$observacion","$estado");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "reportes";
    $utilModelo -> insertar($nombreDeTabla,$campos, $valores);

$_SESSION['mensajeOk']="ok";
header('Location: ../crudUsuarios/Usuarios.php');
exit();
?>
