<?php
$link = mysqli_connect("remotemysql.com:3306", "1Ab98S2zbI", "mj4aJxklIF");
mysqli_select_db($link, "1Ab98S2zbl");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

