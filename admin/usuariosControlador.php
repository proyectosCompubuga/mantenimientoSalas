<?php 

$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido']; 
$tel=$_POST['telefono'];
$password=$_POST['password'];
$Email=$_POST['email'];
$cargo=$_POST['cargo'];





echo '<script language="javascript">alert("USUARIO REGISTRADO CON EXITO");</script>';

    
    echo 'identificacion: '.$_POST["identificacion"].'<br>';
    
    echo 'nombre: '.$_POST["nombre"].'<br>';

    echo 'apellido: '.$_POST["apellido"].'<br>';

    echo 'telefono: '.$_POST["telefono"].'<br>';

    echo 'contraseña: '.$_POST["password"].'<br>';

    echo 'email: '.$_POST["email"].'<br>';

    echo 'tipo de usuario: '.$_POST["cargo"].'<br>';

    
    
?>


<br>
<style>
.boton {
   padding: 10px;
   background-color: red;
   color: white;
}
</style>
<a href="adminVista.php" class="boton">REGRESAR</a> </br>
