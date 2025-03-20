<?php
// Configuración necesaria para acceder a la data base.
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "1";

// Generando la conexión con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
?>