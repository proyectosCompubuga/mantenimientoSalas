<?php

require_once "../crud/crud.php";
$id=$_POST['id'];

echo json_encode(crud::obtnerDatos($id))
?>