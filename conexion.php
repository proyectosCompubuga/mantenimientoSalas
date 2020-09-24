<?php
$link = mysqli_connect("db4free.net:3306", "osdo1987", "osdo2020");
mysqli_select_db($link, "mantesalas");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
