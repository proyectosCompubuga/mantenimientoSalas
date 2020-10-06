<?php
include "../util/util.php";
$util1 = new util();
if (isset($_SESSION['usuario'])) {

    $util1->validarRuta(4);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <LINK REL=StyleSheet HREF="css/pruebaLogin.css" TYPE="text/css" MEDIA=screen>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../css/estiloLogin.css" rel="stylesheet" id="estiloLogin">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../js/login.js"></script>   -->
    <title>INICIO</title>
</head>

<body>
    <div class="container offset-md-8 mt-4 pt-4">
        <div class="card border-success mb-3" style="max-width: 22rem;">
            <div class="card-header">Bienvenido al S.S.R.S.</div>
            <div class="card-body text-success">
                <h5 class="card-heading pb-2">Inicia Sesión</h5>

                <form action="loguinControlador.php" method="post" role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Numero de identificación</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Identificación">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="ipassword" name="ipassword" placeholder="Password">
                    </div>
                    <div class="form-check mb-3">
                        <a href="">Olvidaste contraseña?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function validarPassword() {
            var password = document.getElementById("password").value;
            var rPassword = document.getElementById("rPassword").value;
            if (password !== "" && password !== null && rPassword !== "" && rPassword !== null) {
                if (password === rPassword) {
                    //                                                    alert("son iguales");
                    document.getElementById("guardar").className = "btn btn-success btn-lg ";
                    document.getElementById("guardar").disabled = false;
                    document.getElementById("errorPass").className = "hidden";
                    document.getElementById("pass").className = "form-group";
                    document.getElementById("pass1").className = "form-group";
                } else {
                    document.getElementById("pass").className += " has-error";
                    document.getElementById("pass1").className += " has-error";
                    document.getElementById("errorPass").className = "form-group";
                    document.getElementById("guardar").className += " disabled";
                    document.getElementById("guardar").disabled = true;
                }
            }
        }
    </script>
</body>

</html>