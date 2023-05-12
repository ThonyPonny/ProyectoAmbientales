<?php
include("conexion.php");
// Verificamos si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperamos los datos del formulario
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Verificamos si los campos no están vacíos
    if (empty($name) || empty($email) || empty($message)) {
        // Si alguno de los campos está vacío, redirigimos al usuario al index
        header('Location: index.php');
        exit;
    }

    // Procesamos los datos del formulario aquí, como enviar un correo electrónico, guardar en una base de datos, etc.

    $name = mysqli_real_escape_string($conexion, $name);
    $email = mysqli_real_escape_string($conexion, $email);
    $message = mysqli_real_escape_string($conexion, $message);

    // Creamos la consulta SQL
    $sql = "INSERT INTO contacto (nombre, email, mensaje)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conexion, $sql)) {
        // Mostrar mensaje de éxito
        echo "<script>alert('El mensaje fue enviado correctamente.');</script>";
        header('Location:contacto.html');
        exit;
    } else {
        // Mostrar mensaje de error
        echo "<script>alert('Ocurrió un error al enviar el mensaje.');</script>";
        header('Location:contacto.html');
        exit;
    }
} else {
    // Si no se envió el formulario, redirigimos al usuario al index
    header('Location:contacto.html');
    echo "<script>alert('Ocurrió un error al enviar el mensaje.');</script>";
    exit;
}
?>