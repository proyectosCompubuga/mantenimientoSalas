<?php
include '../util/utilModelo.php';
include_once "../componentes/menuPrincipal.php";

$conexion=mysqli_connect('mysql5016.site4now.net','a68046_proyec','cb1006jsal','db_a68046_proyec');

?>



<!DOCTYPE html>
<html>
<head>
	<title>usuarios</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>




	<div class="container">
		<div class="row">
			<h2>registro de usuarios</h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">usuarios</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								<table class="table table-dark">
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
										<?php 
		                                   $sql="SELECT * from usuarios";
		                                   $result=mysqli_query($conexion,$sql);

		                                   while($mostrar=mysqli_fetch_array($result)){
		                                ?>

									</thead>
									<tbody>
									     <tr>
			                                 <td><?php echo $mostrar['id_usuario'] ?></td>
			                                 <td><?php echo $mostrar['nombre'] ?></td>
			                                 <td><?php echo $mostrar['password'] ?></td>
			                                 <td><?php echo $mostrar['email'] ?></td>
			                                 <td><?php echo $mostrar['tipo_usuario'] ?></td>
											 <td>
												<span class="btn btn-warning btn-sm" onclick="obtenerDatos()" data-toggle="modal" data-target="#actualizarModal">
													<i class="fas fa-edit"></i>
												</span>
												
											</td>
											<td>
												<span class="btn btn-danger btn-sm" onclick="eliminarDatos()">
													<li class="fas fa-trash-alt"></li>
												</span>
											</td>
		                                 </tr>
	                                     <?php 
                                         	}
	                                       ?>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php require_once "modalInsert.php" ?>
	<?php require_once "modalUpdate.php" ?>

	<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap4/popper.min.js"></script>
	<script src="librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	<script src="js/crud.js"></script>


	<script type="text/javascript">
		mostrar();
	</script>

</body>
</html>