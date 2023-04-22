<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <title>Agenda</title>
</head>
<header>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Nosotros.html">Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="galeria.html">Galeria</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Historia.html">Historia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contactos.html">Contactanos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="iniciosecion.php">Iniciar sesion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registrase.php">Registrase</a>
        </li>
    </ul>
</header>
<body>
    
    <?php
        include('login.php');
    ?>
    <article class="mt-5">
            <div class="container mt-5">
                <div class="rows">
                    <div class="col-md-4 mx-auto">
                        <div class="card w-70">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h2>Registarse</h2>
                                </div>
                                <form method="POST">
                                    <div class="mb-5">
                                        <label for="username" class="form-label">Nombre de usuario:</label>
                                        <input  class="form-control" type="text" id="username" name="username" pattern="^.{10,}$" required title="Su nombre de usario equiee como mino 10 cacteres">
                                    </div>
                                    <div class="mb-5">
                                        <label for="correo" class="form-label">Nombre de usuario:</label>
                                        <input  class="form-control" type="text" id="correo" name="correo" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" required title="Lo que ingresa no es correo electronico">
                                    </div>
                                    <div class="mb-5">
                                        <label for="password" class="form-label">Contraseña:</label>
                                        <input class="form-control" type="password" id="password" name="password" pattern="^[a-zA-Z\d]{15,}$" required title="Solo se permiten letras y numeros con una longitudu de 15 cacateres">
                                    </div>
                                    <div class="mb-5">
                                        <label for="password" class="form-label">Confirmar contraseña:</label>
                                        <input class="form-control" type="password" id="password1" name="password1" pattern="^[a-zA-Z\d]{15,}$" required title="Solo se permiten letras y numeros con una longitudu de 15 cacateres.">
                                    </div>
                                    <div class="mb-4 mx-auto">
                                        <input name="btn_registarse" type="submit" value="Registarse" class="btn btn-primary">
                                        
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </article> 
    <div class="container mt-5">
        <div class="row">
        </div>
    </div>
    
    
   
</body>
</html>