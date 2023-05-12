<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="icon" href="img/unach.png">
    <title>Registrase-Salvando el cañon</title>
</head>

<header>
	<div class="head">

		<div class="logo">
            <a href="index.html">
                <img src="img/unach.png" alt="">
            </a>
        </div>

		<nav class="navbar">
			<a href="index.html">Inicio</a>
			<a href="Nosotros.html">Nosotros</a>
			<a href="Galeria.html">Galeria</a>
			<a href="Historia.html">Historia</a>
			<a href="contacto.html">Contactos</a>
			<a href="iniciosesion.php">Iniciar sesion</a>
			<a href="registrase.php">registrase</a>
		</nav>

	</div>
</header>

<body class="d-flex flex-column min-vh-100 bg-Green">
	<div class="mb-5"></div>
    <div class="mb-5"></div>
	<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header mb-5"><h2>Registarse</h2></div>
            <div class="card-body mb-5¿2">
                <form method="post" action="register.php">
                    <div class="form-group mb-2">
                        <label for="name">Nombre usuario:</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" pattern=".{8,}" title="El campo debe tener al menos 8 caracteres">
                    </div>
                    <div class="form-group mb-2">
                        <label for="confirm_password">Confirmar contraseña:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" pattern=".{8,}" title="El campo debe tener al menos 8 caracteres">
                    </div>


                    <button type="submit" class="btn btn-primary">Registrarse:</button>
					<div class="mb-2"></div>
					<div class="mb-1">
					<?php
						if (isset($_GET['mensaje'])) {
							echo "<div class='alert alert-danger'>" . $_GET['mensaje'] . "</div>";
						}
					?>
					</div>
					
                </form>
            </div>
            
        </div>
        <div class="mb-5"></div>
        <div class="mb-5"></div>
    </div>
</div>
	</div>

</body>

<footer class="mt-auto mt-5">
	<div class="mb-5"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>&copy; 2023 Salvando al cañón </p>
			</div>
			<div class="col-md-6 text-end">
				<a href="privacidad.html" class="text-white">Política de privacidad</a>
				<a href="servicio.html" class="text-white">Términos de servicio</a>
			</div>
		</div>
	</div>
</footer>

</html>