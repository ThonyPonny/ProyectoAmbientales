<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // obtener los valores de los campos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm_password']) &&
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password']) &&
        !empty($_POST['confirm_password'])) {
            
                $consulta = "SELECT * FROM usuario WHERE nombre = '".mysqli_real_escape_string($conexion, $name)."'";
                $resultado  = mysqli_query($conexion,$consulta);
                
                if (!$resultado) {
                    // Mostrar un mensaje de error si la consulta falla
                    header("Location:registrase.php?mensaje=Error:%20" . mysqli_error($conexion));
                    exit();
                }
                if (mysqli_num_rows($resultado) > 0) {
                    // La consulta devolvió al menos una fila, realizar acción aquí
                    header("Location:registrase.php?mensaje=Error:%20El%20usuario%20ya%20existe");
                    exit();
            
                }
                if (mysqli_num_rows($resultado) == 0) {
                    $contra = password_hash($confirm_password,PASSWORD_DEFAULT,['cost'=>10]);
                    $insertar = "INSERT INTO usuario (nombre, correo, contrasena, tipo_usuario) 
                    VALUES ('".mysqli_real_escape_string($conexion, $name)."', 
                            '".mysqli_real_escape_string($conexion, $email)."',
                            '".mysqli_real_escape_string($conexion, $contra)."',
                            'normal')";
                    $resultado  = mysqli_query($conexion,$insertar);
                    header("Location:index.html");
                    exit();
                }
    }else{
        header("Location:registrase.php?mensaje=Error:%20Los%20campos%20no%20pueden%20estar%20vacíos%20");
        exit();
    }

}
?>