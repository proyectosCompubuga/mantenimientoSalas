<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "calzado");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

