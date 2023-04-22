<?php
    $servidor = "localhost";
    $usuario = "id20640104_root";
    $contrasena = "PVg7VwLar20E1!";
    $db = "id20640104_salvandoalcanon";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>