<?php

require_once "../crud/crud.php";

$datos array(
      
    'id' => $_POST['id'],
    'nombre' => $_POST['nombreu'],
    'contraseña' => $_POST['passwordu'],
    'email' => $_POST['emailu'],
    'tipo de usuarios' => $_POST['usuariou'],


echo crud::actualizarDatos($datos);

);







?>