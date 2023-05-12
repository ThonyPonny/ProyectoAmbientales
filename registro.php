<?php
session_start();
if(isset($_SESSION['username'])) {
	// la variable $_SESSION['username'] tiene algún valor
} else {
	header("Location: iniciosesion.php?mensaje=Por%20favor,%20inicie%20sesi%C3%B3n");
	exit();
}
$buenas = $_POST['buenas'];
$malas = $_POST['malas'];
$a = 1;
include ("conexion.php");
$consulta = "INSERT INTO resul (resultado, idusuario) VALUES (" . mysqli_real_escape_string($conexion, $buenas) . ", " . mysqli_real_escape_string($conexion, $_SESSION['idusario']) . ")";

$resultado  = mysqli_query($conexion, $consulta);

?>