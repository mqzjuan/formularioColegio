<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "colegio";

$conex = new mysqli($servername, $username, $pass, $dbname);

if ($conex->connect_error) { // Aquí cambiamos $conexion por $conex
    die("Conexion Fallida" . $conex->connect_error); // También cambiamos $conexion por $conex
}
?>