<?php
@session_start();
include '../util/utilModelo.php';

 
$idReporte=$_POST['idReporte'];
$observacion=$_POST['Observacion'];
$estado=$_POST['inlineRadioOptions'];




    $utilModelo = new utilModelo();
	//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("id_repa", "id_reporte", "observacion");
    //$valores son los valores a almacenar
    $valores = array("default","$idReporte","$observacion");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "reparacion";
    $utilModelo -> insertar($nombreDeTabla,$campos, $valores);

//Editar tabla Reportes//

     //$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("estado");
    //$valores son los valores a almacenar
    $valores = array("$estado");
    //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    //campo condicion//
    $campoCondicion = "id_reporte";
    //condicion//
    $condicion = $idReporte;

    $tabla = "reportes";

    $utilModelo -> modificar($tabla,$campos, $valores,$campoCondicion,$condicion);

    
 echo $estado;
$_SESSION['mensajeOk']="ok";
// header('Location: ../crudUsuarios/Usuarios.php');
exit();
?>
