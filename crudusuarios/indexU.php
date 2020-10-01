
<?php include_once "../registrarUsuarios/registrarUsuariosControlador.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
<?php
include '../conexion.php';
$sql="select * from usuarios";
$resultado=mysql_query($sql)
?>

<div>

 <table>

 <thead>
         
    <tr>
      <th>id</th>
      <th>nombre</th>
      <th>password</th>
       <th>email</th>
       <th>tipo de usuarios</th>
    </tr>

 </thead>

  <tbody>

  <?php  while ($filas=mysql_fecth_assoc($resultado)) {

  ?>

  <tr> 
  <td><?php echo $filas['id_usuarios'] ?></td>
  <td><?php echo $filas['nombre'] ?></td>
  <td><?php echo $filas['password'] ?></td>
  <td><?php echo $filas['email'] ?></td>
  <td><?php echo $filas['tipo_usuario'] ?></td>
  <td>
  <a href="">editar</a>
  <a href="">eliminar</a>
  </td>
  
  
  </tr>
  <?php  } ?>
  </tbody>
</table> 

</div>


    
</body>
</html>