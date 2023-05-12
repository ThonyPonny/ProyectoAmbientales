<?php

$buenas = $_POST['buenas'];
$malas = $_POST['malas'];
echo $buenas;

$a = 1;
include ("conexion.php");
$consulta = "INSERT INTO resul (resultado) VALUES (" . mysqli_real_escape_string($conexion, $buenas) . ")";
$resultado  = mysqli_query($conexion, $consulta);
// Por ejemplo, podrías guardarlos en una base de datos

// Devolver una respuesta al cliente
//echo "Respuestas recibidas: buenas=$buenas, malas=$malas";

?>