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
    <title>Iniciar sesión-Salvando el cañon</title>
</head>

<header>
	<div class="head">

		<div class="logo">
			<a href="index.html"><img src="img/unach.png" alt=""></a>
		</div>

		<nav class="navbar">
			<a href="index.html">Inicio</a>
			<a href="Nosotros.html">Nosotros</a>
			<a href="Galeria.html">Galeria</a>
			<a href="Historia.html">Historia</a>
			<a href="contacto.html">Contactos</a>
			<a href="iniciosesion.php">Iniciar sesión</a>
			<a href="registrase.php">registarse</a>
		</nav>

	</div>
</header>

<body  class="d-flex flex-column min-vh-100 bg-Green">
	
	
		<div class="mb-5"></div>
		<div class="mb-5"></div>
		<div class="mb-5"></div>
		<div class="container">
        

            <div class="row justify-content-center">
                <div class="col-md-4" method="post" action="login.php">
                    <div class="card">
						<div id="mensaje"></div>
						
                        <div class="card-header mb-5"><h2>Iniciar sesión</h2></div>
                        <div class="card-body mb-5">
                        <form method="post" action="login.php">
                            <div class="form-group mb-3">
                            	<label for="email">Nombre de usuario:</label>
                            	<input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group mb-3">
                            	<label for="password">Contraseña:</label>
                            	<input type="password" class="form-control" id="password" name="password">
                            </div>
                            	<button type="submit" class="btn btn-primary">Iniciar sesión</button>
								<div class="mb-2"></div>
							</div>
                        </form>
                        <div class="mb-2">
							<?php
								if (isset($_GET['mensaje'])) {
									echo "<div class='alert alert-danger mb-1'>" . $_GET['mensaje'] . "</div>";
								}
							?>
						</div>
						</div>
                    </div>
                    
                </div>
            </div>
            
		</div>
		
	
	

</body>


<footer class="mt-auto mt-5 bg-Green-strong">
	<div class="mb-5"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>&copy; 2023 Salvando al cañón </p>
			</div>
			<div class="col-md-6 text-end">
				<a href="privacidad.html" class="text-white">Política de privacidad</a>
				<a href="#" class="text-white">Términos de servicio</a>
			</div>
		</div>
	</div>
</footer>
</html>