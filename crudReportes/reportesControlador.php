<?php
@session_start();
//include 'usuarioModelo.php';
include '../util/utilModelo.php';
include '../util/util.php';
$util = new util();
$utilModelo = new utilModelo();
//valores del seaprado

$idusuario="4";
$idsala= filter_input(INPUT_POST,'id_sala');
$idrepa=0;
$hoy = date("Y-m-d H:i:s");
$observacion= filter_input(INPUT_POST,'observacion');
$estado=0;



//guardar
if(isset($_POST['reportar'])){
          	//$campos es el nombre de los campos tal cual aparece en la base de datos
            $campos = array("id_reporte", "id_usuario","id_sala","id_repa","fecha_reporte", "observacion", "estado");
          //$valores son los valores a almacenar
            $valores = array("default","$idusuario","$idsala","$idrepa","$hoy","$observacion","$estado");
          //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
          $nombreDeTabla = "reportes";
          $utilModelo -> insertar($nombreDeTabla,$campos, $valores);
// $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudReportes/reportesVista.php');
//modificar
}else if(isset($_POST['modificar'])){
	echo "abonar";

  $campos = array("id_reporte", "id_usuario","id_sala","fecha_reporte", "observacion", "estado");
  //$valores son los valores a almacenar
  $valores = array("$identificacion","$idsala","$idrepa","$hoy","$observacion","$estado");
  //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
  $nombreDeTabla = "reportes";
$utilModelo -> modificar($nombreDeTabla,$campos,$valores,'id_reporte',$identificacion);

// $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudReportes/reportesVista.php');
}
else{


    $nombreDeTabla = "reportes";
  $utilModelo -> eliminarRegistros($nombreDeTabla,"id_reporte=$identificacion");
  // $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudReportes/reportesVista.php');

}
	exit();
?>
