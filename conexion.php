<?php
$link = mysqli_connect("mysql5035.site4now.net", "a6b655_laborat", "Cb1006jsal");
mysqli_select_db($link, "db_a6b655_laborat");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

