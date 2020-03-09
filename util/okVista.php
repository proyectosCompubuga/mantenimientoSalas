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
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">

                <div class="widget widget-nopad">
                    <div class="widget-header">
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                        <div class="widget big-stats-container">
                            <div class="widget-content">
                                <h6 class="bigstats"><img src="../img/ok1.png" height="60" width="60" alt="">
                                    <?php
                                        @session_start();
                                        if (isset($_SESSION['mensajeOk'])) {
                                            echo $_SESSION['mensajeOk'];
                                            unset($_SESSION['mensajeOk']);
                                        }
                                    ?>
                                </h6>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="formcontrols">
                                        <form id="edit-profile" action="solicitudRetiroControlador.php" method="post" class="form-horizontal">
                                            <fieldset>
                                                <div class="control-group">

                                                    <div class="controls">

                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                            </fieldset>
                                        </form>
                                    </div>



                                </div>
                            </div>
                            <!-- /widget-content -->

                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /main-inner -->
</div>

<?php
    include "../componentes/pie.php";
?>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/excanvas.min.js"></script>
<script src="../js/chart.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="../js/full-calendar/fullcalendar.min.js"></script>

<script src="js/base.js"></script>

</body>
</html>
