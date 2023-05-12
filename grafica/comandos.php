<?php
    function consulta($num){
        include ("conexion.php");
        $consulta = "SELECT COUNT(resultado) FROM resul WHERE resultado =".mysqli_real_escape_string($conexion, $num).";";
        $resultado  = mysqli_query($conexion,$consulta);

        if ($resultado) {
            $fila = mysqli_fetch_row($resultado);
            $count = $fila[0]; // almacenar el valor de COUNT() en la variable $count
            return $count;
        } else {
            // Si la consulta falló, asignar 0 a la variable $count
            $count = 0;
            return $count;
        }
    }
?>