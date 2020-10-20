<?php
@session_start();
include '../util/utilModelo.php';

$id_equipo=$_POST['id_equipo'];
$id_sala=$_POST['id_sala']; 
$nombre_pc=$_POST['nombre_pc'];
$procesador=$_POST['procesador'];
$ram=$_POST['ram'];
$disco_duro=$_POST['disco_duro'];
$teclado=$_POST['teclado'];
$mouse=$_POST['mouse'];
$pantalla=$_POST['pantalla'];
$observacion=$_POST['observacion'];


    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("id_equipo", "id_sala", "nombre_pc","procesador", "ram", "disco_duro", "teclado", "mouse", "pantalla", "observacion");
    //$valores son los valores a almacenar
    $valores = array("$id_equipo", "$id_sala", "$nombre_pc","$procesador", "$ram", "$disco_duro", "$teclado", "$mouse", "$pantalla", "$observacion");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "equipos";
    $utilModelo -> insertar($nombreDeTabla,$campos, $valores);

$_SESSION['mensajeOk']="ok";
header('Location: ../crudequipos/equipos.php');
exit();
?>
