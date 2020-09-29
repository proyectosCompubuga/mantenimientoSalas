<?php
$link = mysqli_connect("mysql5016.site4now.net", "a68046_proyec", "cb1006jsal");
mysqli_select_db($link, "db_a68046_proyec");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

