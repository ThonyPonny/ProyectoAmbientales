<?php
	session_start();

	if(isset($_SESSION['username'])) {
		// la variable $_SESSION['username'] tiene algún valor
	} else {
		header("Location: iniciosesion.php?mensaje=Por%20favor,%20inicie%20sesi%C3%B3n");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<link rel="icon" href="img/unach.png">
    <title>Principal-Salvando el cañon</title>
</head>

<header>
	<div class="head">

		<div class="logo">
			<a href="#"><img src="img/unach.png" alt=""></a>
		</div>

		<nav class="navbar">
			<a href="index.html">Inicio</a>
			<a href="Nosotros.html">Nosotros</a>
			<a href="Galeria.html">Galeria</a>
			<a href="Historia.html">Historia</a>
			<a href="contacto.html">Contactos</a>
			<a href="main.php">Principal</a>
			<a href="cuestionario.php">Cuestionario</a>
			<?php
				if ($_SESSION['privilegio'] == "admin") {
					echo '<a href="grafica.php">Resultados</a>';
				}
			?>
			<a href="logout.php">Cerrar sesion</a>
		</nav>

	</div>
</header>

<body class="d-flex flex-column min-vh-100 bg-Green">
	<div class="mb-5"></div>
	<div class="mb-5"></div>
	
	<div class="container">
	<?php
	echo "<h1 class='text-white'>Bienvenido, {$_SESSION['username']}!</h1>";
	
	if (isset($_GET['mensaje'])) {
		echo "<div class='alert alert-danger mb-1'>" . $_GET['mensaje'] . "</div>";
	}
							
	?>
	
	<p class="fs-5 text-justify formulario">Estamos emocionados de tener tu participación en nuestro proyecto ambiental. ¡Gracias por unirte a nosotros! Tu contribución es importante para construir un mundo mejor y más sostenible.</p>
		<p class="fs-5 text-justify formulario">Actualmente, todos los usuarios tienen un rol de usuario básico, lo cual les permite llenar el cuestionario para ayudarnos a recopilar información valiosa sobre el medio ambiente.</p>
		<p class="fs-5 text-justify formulario">Si eres seleccionado para el rol de moderador, tendrás acceso a los resultados y estadísticas obtenidos a través del cuestionario, lo cual te permitirá consultar y analizar la información de una manera más detallada.</p>
		<p class="fs-5 text-justify formulario">Gracias de nuevo por tu interés en nuestro proyecto. ¡Esperamos conocerte pronto!</p>
	</div>

</body>

<footer class="mt-auto mt-5 bg-Green-strong">
	<div class="mb-5"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>&copy; 2023 Salvando al cañón</p>
			</div>
			<div class="col-md-6 text-end">
				<a href="privacidad.html" class="text-white">Política de privacidad</a>
				<a href="servicio.html" class="text-white">Términos de servicio</a>
			</div>
		</div>
	</div>
</footer>

</html>