<?php
@session_start();
//include 'usuarioModelo.php';
include '../util/utilModelo.php';
include '../util/util.php';
$util = new util();
$utilModelo = new utilModelo();
//valores del seaprado
$identificacion= filter_input(INPUT_POST,'identificacion');
$nombres= filter_input(INPUT_POST,'nombre') ." ". $_POST['apellido']; 
$tel= filter_input(INPUT_POST,'telefono');
$password= filter_input(INPUT_POST,'password');
$Email= filter_input(INPUT_POST,'email');
$cargo= filter_input(INPUT_POST,'cargo');


//guardar
if(isset($_POST['guardar'])){
          	//$campos es el nombre de los campos tal cual aparece en la base de datos
            $campos = array("id_usuario", "nombre", "telefono","password", "email", "tipo_usuario");
          //$valores son los valores a almacenar
          $valores = array("$identificacion","$nombres","$tel","$password","$Email","$cargo");
          //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
          $nombreDeTabla = "usuarios";
          $utilModelo -> insertar($nombreDeTabla,$campos, $valores);
$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudUsuarios/usuariosVista.php');
//modificar
}else if(isset($_POST['modificar'])){
	echo "abonar";

  $campos = array("nombre", "telefono","password", "email", "tipo_usuario");
  //$valores son los valores a almacenar
  $valores = array("$nombres","$tel","$password","$Email","$cargo");
  //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
  $nombreDeTabla = "usuarios";
$utilModelo -> modificar($nombreDeTabla,$campos,$valores,'id_usuario',$identificacion=79);

$_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudUsuarios/usuariosVista.php');
}
else{


    $nombreDeTabla = "usuarios";
  $utilModelo -> eliminarRegistros($nombreDeTabla,"identificacion=$identificacion");
  $_SESSION['mensajeOk']="Accion realizada";header('Location: ../crudUsuarios/usuariosVista.php');

}
	exit();
?>
