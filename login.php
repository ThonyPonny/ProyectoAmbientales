<?php
session_start();

include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['username'], $_POST['password']) &&
        !empty($_POST['username']) &&
        !empty($_POST['password'])) {
            $consulta = "SELECT * FROM usuario WHERE nombre = '".mysqli_real_escape_string($conexion, $username)."'";
            $resultado  = mysqli_query($conexion,$consulta);
        
            if (!$resultado) {
                // Mostrar un mensaje de error si la consulta falla
                header("Location:iniciosesion.php?mensaje=Error:%20" . mysqli_error($conexion));
                exit();
            } else {
                $fila = mysqli_fetch_assoc($resultado);
                // Obtener el primer dato de la fila
                $contra = $fila["contrasena"];
                $tipusu = $fila["tipo_usuario"];
                $id = $fila["idusuario"];
            }
            if (mysqli_num_rows($resultado) == 0) {
                // La consulta devolvió al menos una fila, realizar acción aquí
                header("Location:iniciosesion.php?mensaje=Error:%20El%20usuario%20no%20existe");
                exit();
        
              } else {
                // La consulta no devolvió resultados, hacer otra acción aquí
                if (password_verify($password,$contra)) {
                    // Establecer las variables de sesión
                    $_SESSION['privilegio'] = $tipusu;
                    $_SESSION['username'] = $username;
                    $_SESSION['privilegio'] = $tipusu;
                    $_SESSION['idusario'] = $id;
                    header("Location:main.php");
                    exit();
                } else {
                    header("Location:iniciosesion.php?mensaje=Error:%20La%20contraseña%20es%20incorrecta");
                    exit();
                }
            }
        }else {
        header("Location:iniciosesion.php?mensaje=Error:%20No%20se%20permiten%20campos%20vacíos");
        exit();
    }
}else{
    header("Location:iniciosesion.php?mensaje=Error:%20No%20se%20permiten%20campos%20vacíos");
    exit();
}
?>