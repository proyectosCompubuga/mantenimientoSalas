<?php
@session_start();
include '../util/utilModelo.php';
$util = new utilModelo();

//$campos = array("codigoReferido","direccion");
//$valores = array("sd33d2","calle 19 # 9-113");
//$util->modificar('usuario',$campos,$valores,'id','1');



$usuario = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'ipassword');

$nombreCampo = array("id_usuario","password");
$valor = array("$usuario","$password");
$tabla = "usuarios";
$result = $util -> mostrarregistros($tabla,$nombreCampo,$valor);
$contador = 0;
echo $result!=null;
while ($fila = mysqli_fetch_array($result)) {
    if ($fila != NULL) {
        $_SESSION['usuario']=array($fila['id_usuario'],$fila['tipo']);
        $contador++;
    }
}

include "../util/util.php";
$util1 = new util();
$util1 -> validarRuta(4);
?>
