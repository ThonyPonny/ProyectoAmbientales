<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $db = "graficas";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>