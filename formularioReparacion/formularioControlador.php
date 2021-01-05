<?php
@session_start();
include '../util/utilModelo.php';

$datos_de_reporte=$_POST[" id reporte:123   id usuario:675    id sala:543<br>
id sala:243  fecha reporte:22/sep/2020 OBSERVACION:se encuentra teclado en mal estado no funcionan algunas teclas<p>"];
$datos_de_equipo=$_POST["id equipo:s2-equipo4  nombre pc:Asus procesador:core i7-3700x<br>
ram:ddr4-5066 disco duro:500gb  teclado: pantalla:<p>"];




    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array(" id reporte:123   id usuario:675    id sala:543<br>
    id sala:243  fecha reporte:22/sep/2020 OBSERVACION:se encuentra teclado en mal estado no funcionan algunas teclas<p>",
    "id equipo:s2-equipo4  nombre pc:Asus procesador:core i7-3700x<br>
    ram:ddr4-5066 disco duro:500gb  teclado: pantalla:<p>");
    //$valores son los valores a almacenar
    $valores = array("$datos_de_reporte","$datos_de_equipo");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "formulario";
    $utilModelo -> insertar($nombreDeTabla,$campos, $valores);

$_SESSION['mensajeOk']="ok";
//header('Location: ../reparacion/reparacionControlador.php');
exit();
?>
