<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <title>COMPUBUGA</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">S.S.R.S</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="../registrarUsuarios/registrarUsuariosVista.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Salas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../crudUsuarios/usuariosVista.php">Registrar</a>
            <a class="dropdown-item " href="../registrarUsuarios/registrarUsuariosVista.php">Ver Salas</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../reportarIncidencias/reportarIncidenciasVista.php">Reportar</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="../registrarUsuarios/registrarUsuariosVista.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Usuarios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../crudUsuarios/usuariosVista.php">Ver usuarios</a>
            <a class="dropdown-item " href="../registrarUsuarios/registrarUsuariosVista.php">Registrar</a>

          </div>
        </li>
      </ul>
      <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown dropleft">
            <div class="nav-link  rounded-circle border border-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user mx-1"></i>
            </div>
            <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Usuario</a>
              <a class="dropdown-item" href="../seguridad/cerrarSesion.php">Cerrar sesion</a>
            </div>
          </li>
        </ul>
      </div>
    </div>


  </nav>