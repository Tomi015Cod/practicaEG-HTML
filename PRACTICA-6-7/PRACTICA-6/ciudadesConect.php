<?php
$link = mysqli_connect("localhost", "root", "","phpmyadmin",3307) or die ("Ocurrio un error en la conexion con la base de datos.");
mysqli_select_db($link, "capitales");
?>