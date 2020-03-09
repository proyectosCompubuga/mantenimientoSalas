<?php

if ($_FILES['archivo']["error"] > 0)

  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  echo "no se encontro la ruta expecifica";
  }

else{
  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
 echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];


} /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/

$rutaArchivo = "../archivosPdf/$grado/$materia/".$_FILES['archivo']['name'];
echo "ruta archivo".$rutaArchivo;
move_uploaded_file($_FILES['archivo']['tmp_name'],$rutaArchivo);



 ?>
