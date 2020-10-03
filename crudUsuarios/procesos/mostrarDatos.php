<?php
require_once "../crud/crud.php";
$obj= new crud();
$datos=$obj->mostrarDatos();




$tabla='<table class="table table-dark">
<thead>
    <tr class="font-weight-bold">
    
    
        <td>id</td>
        <td>nombre</td>
        <td>contraseña</td>
        <td>email</td>
        <td>tipo de usuario</td>
        <td>Editar</td>
        <td>Eliminar</td>
        
        
        
    </tr>

</thead>
<tbody>';

$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla=$datosTabla.'   <tr>
    <td> '. $value['id_usuario'].'</td>
    <td> '. $value['nombre'].'</td>
    <td> '. $value['password'].'</td>
    <td> '. $value['email'].'</td>
    <td> '. $value['tipo_usuario'].'</td>
    <td>
       <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
           <i class="fas fa-edit"></i>
       </span>
       
   </td>
   <td>
       <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id'].')">
           <li class="fas fa-trash-alt"></li>
       </span>
   </td>
</tr>';


}

echo $tabla.$datosTabla.'</tbody></table>';

?>