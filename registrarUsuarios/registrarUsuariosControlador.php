<?php
@session_start();
include '../util/utilModelo.php';

$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombre'] ." ". $_POST['apellido']; 
$tel=$_POST['telefono'];
$password=$_POST['password'];
$Email=$_POST['email'];
$cargo=$_POST['cargo'];


    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("id_usuario", "nombre","password", "email", "tipo_usuario");
    //$valores son los valores a almacenar
    $valores = array("$identificacion","$nombres","$password","$Email","1");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "usuarios";
    $utilModelo -> insertar($nombreDeTabla,$campos, $valores);

$_SESSION['mensajeOk']="ok";
header('Location: ../index.php');
exit();
?>
