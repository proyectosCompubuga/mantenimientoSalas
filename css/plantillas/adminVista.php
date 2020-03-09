<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(0);
    $nombreCampo = array("codigo");
    $valor = array($_SESSION['usuario'][0]);
    $tabla = "usuario";
    $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
            $saldo = $fila['saldo'];
        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
  		<!-- Mobile Specific Meta -->
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<!-- Favicon-->
  		<link rel="shortcut icon" href="../img/fav.png">

  		<!-- Meta Keyword -->
  		<meta name="keywords" content="">
  		<!-- meta character set -->
  		<meta charset="UTF-8">
  		<!-- Site Title -->
  		<title>Calzado Karol Bucaramanga</title>

  		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  			<!--
  			CSS
  			============================================= -->
  			<link rel="stylesheet" href="../css/linearicons.css">
  			<link rel="stylesheet" href="../css/font-awesome.min.css">
  			<link rel="stylesheet" href="../css/bootstrap.css">
  			<link rel="stylesheet" href="../css/magnific-popup.css">
  			<link rel="stylesheet" href="../css/jquery-ui.css">
  			<link rel="stylesheet" href="../css/nice-select.css">
  			<link rel="stylesheet" href="../css/animate.min.css">
  			<link rel="stylesheet" href="../css/owl.carousel.css">
  			<link rel="stylesheet" href="../css/main.css">

</head>
<body>
<?php
    include "../componentes/menuPrincipal.php";
?>

<?php
    include "../componentes/pie.php";
?>
            <script src="../js/vendor/jquery-2.2.4.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/vendor/bootstrap.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="../js/easing.min.js"></script>
            <script src="../js/hoverIntent.js"></script>
            <script src="../js/superfish.min.js"></script>
            <script src="../js/jquery.ajaxchimp.min.js"></script>
            <script src="../js/jquery.magnific-popup.min.js"></script>
            <script src="../js/jquery.tabs.min.js"></script>
            <script src="../js/jquery.nice-select.min.js"></script>
            <script src="../js/isotope.pkgd.min.js"></script>
            <script src="../js/waypoints.min.js"></script>
            <script src="../js/jquery.counterup.min.js"></script>
            <script src="../js/simple-skillbar.js"></script>
            <script src="../js/owl.carousel.min.js"></script>
            <script src="../js/mail-script.js"></script>
            <script src="../js/main.js"></script>

</body>
</html>
