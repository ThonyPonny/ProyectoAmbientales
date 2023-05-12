<?php
    session_start(); // Iniciar la sesión
    
    // Eliminar todas las variables de sesión
    $_SESSION = array();
    
    // Destruir la sesión
    session_destroy();
    
    // Redirigir al usuario a la página de inicio de sesión
    header("Location: iniciosesion.php");
    exit();
?>