<?php

require_once "../crud/crud.php";

$datos array(
      
    'id' => $_POST['id'],
    'nombre' => $_POST['nombre'],
    'contraseña' => $_POST['password'],
    'email' => $_POST['email'],
    'tipo de usuarios' => $_POST['tipo_usuarios'],


echo crud::insertarDatos($datos);

);







?>