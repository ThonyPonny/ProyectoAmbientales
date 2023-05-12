<?php
		session_start();
		include("conexion.php");
		if(isset($_SESSION['username'])) {
			// la variable $_SESSION['username'] tiene algún valor
		} else {
			header("Location: iniciosesion.php?mensaje=Por%20favor,%20inicie%20sesi%C3%B3n");
			exit();
		}
		$consulta = "SELECT * FROM resul WHERE idusuario = '".mysqli_real_escape_string($conexion, $_SESSION['idusario'])."'";
        $resultado  = mysqli_query($conexion,$consulta);
        
        if (!$resultado) {
                // Mostrar un mensaje de error si la consulta falla
            header("Location:main.php?mensaje=Error:%20" . mysqli_error($conexion));
            exit();
        }
		if (mysqli_num_rows($resultado) > 0) {
			// La consulta devolvió al menos una fila, realizar acción aquí
			header("Location: main.php?mensaje=Ya%20has%20completado%20el%20cuestionario");
			exit();
	
		}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="icon" href="img/unach.png">
    <title>Cuestionario-Salvando el cañon</title>
    
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
			<a href="main.php">Principal</a>
			<a href="cuestionario.php">Cuestionario</a>
			<?php
				if ($_SESSION['privilegio'] == "admin") {
					echo '<a href="grafica.php">Resultados</a>';
				}
			?>
			<a href="logout.php">Cerrar sesión</a>
		</nav>

	</div>
</header>


<body class="d-flex flex-column min-vh-100 bg-Green">
	
	<div class="container">
		

	<div class="row">
	<div class="mb-5"></div>
	<div class="mb-5"></div>
			<div class="d-flex justify-content-center">
				
				<div class="col-sm-10">
					<div class="card">
						<div class="card-body">
						<form id="formulario" class="formulario">
							<h2 class="ali">Cuestionario</h2>
							<h4>Pregunta 1</h4>
							<p class="titulo-p">¿Qué es la educación ambiental?</p>
							<label ><input type="radio" name="pregunta1" value="a">  a) Un conjunto de técnicas para cuidar el medio ambiente.</label><br>
							<label><input type="radio" name="pregunta1" value="b">  b) Un proceso de formación y concienciación para preservar el medio ambiente.</label><br>
							<label><input type="radio" name="pregunta1" value="c">  c) Una actividad que se realiza en contacto con la naturaleza.</label><br>

							<h4>Pregunta 2</h4>
							<p class="titulo-p">¿Cuál es el objetivo principal de la educación ambiental?</p>
							<label><input type="radio" name="pregunta2" value="a">  a) Concienciar sobre la importancia del medio ambiente.</label><br>
							<label><input type="radio" name="pregunta2" value="b">  b) Fomentar el uso indiscriminado de los recursos naturales.</label><br>
							<label><input type="radio" name="pregunta2" value="c">  c) Promover el desarrollo económico sin considerar el impacto ambiental</label><br>

							<h4>Pregunta 3</h4>
							<p class="titulo-p">¿Qué tipo de aprendizaje se fomenta en la educación ambiental?</p>
							<label><input type="radio" name="pregunta3" value="a">  a) Aprendizaje teórico</label><br>
							<label><input type="radio" name="pregunta3" value="b">  b) Aprendizaje práctico</label><br>
							<label><input type="radio" name="pregunta3" value="c">  c) Aprendizaje a distancia</label><br>

							<h4>Pregunta 4</h4>
							<p class="titulo-p">¿Quiénes pueden participar en la educación ambiental?</p>
							<label><input type="radio" name="pregunta4" value="a">  a) Solo los expertos en medio ambiente.</label><br>
							<label><input type="radio" name="pregunta4" value="b">  b) Solo los niños y jóvenes.</label><br>
							<label><input type="radio" name="pregunta4" value="c">  c) Todas las personas, independientemente de su edad o nivel de conocimiento.</label><br>

							<h4>Pregunta 5</h4>
							<p class="titulo-p">¿Por qué es importante la educación ambiental?</p>
							<label><input type="radio" name="pregunta5" value="a">  a) Para mejorar la calidad de vida de las personas.</label><br>
							<label><input type="radio" name="pregunta5" value="b">  b) Para preservar el equilibrio ecológico del planeta.</label><br>
							<label><input type="radio" name="pregunta5" value="c">  c) Para promover el consumismo y el desarrollo económico.</label><br>

							<h4>Pregunta 6</h4>
							<p class="titulo-p">¿Cuál es el rol de la sociedad en la educación ambiental?</p>
							<label><input type="radio" name="pregunta6" value="a">  a) Participar activamente en la búsqueda de soluciones a los problemas ambientales.</label><br>
							<label><input type="radio" name="pregunta6" value="b">  b) Ignorar los problemas ambientales.</label><br>
							<label><input type="radio" name="pregunta6" value="c">  c) Esperar que el gobierno resuelva los problemas ambientales.</label><br>

							<h4>Pregunta 7</h4>
							<p class="titulo-p">¿Qué tipo de cambio busca promover la educación ambiental?</p>
							<label><input type="radio" name="pregunta7" value="a">  a) Cambio de hábitos de consumo y comportamiento.</label><br>
							<label><input type="radio" name="pregunta7" value="b">  b) Fomento del consumismo y del uso indiscriminado de los recursos naturales.</label><br>
							<label><input type="radio" name="pregunta7" value="c">  c) Cambio de hábitos alimenticios.</label><br>

							<h4>Pregunta 8</h4>
							<p class="titulo-p">¿Qué es el desarrollo sostenible?</p>
							<label><input type="radio" name="pregunta8" value="a">  a) Un modelo de desarrollo que busca la explotación indiscriminada de los recursos naturales.</label><br>
							<label><input type="radio" name="pregunta8" value="b">  b) Un modelo de desarrollo que busca satisfacer las necesidades del presente sin comprometer la capacidad de las futuras generaciones para satisfacer sus propias necesidades.</label><br>
							<label><input type="radio" name="pregunta8" value="c">  c) Un modelo de desarrollo que promueve el uso indiscriminado de los recursos naturales.</label><br>

							<h4>Pregunta 9</h4>
							<p class="titulo-p">¿Por qué es importante adoptar un enfoque de desarrollo sostenible?</p>
							<label><input type="radio" name="pregunta9" value="a">  a) Porque permite satisfacer las necesidades del presente sin comprometer la capacidad de las futuras generaciones para satisfacer sus propias necesidades.</label><br>
							<label><input type="radio" name="pregunta9" value="b">  b) Porque promueve la explotación indiscriminada de los recursos naturales.</label><br>
							<label><input type="radio" name="pregunta9" value="c">  c) Porque nos enseña a despreocuparnos del medio ambiente.</label><br>

							<h4>Pregunta 10</h4>
							<p class="titulo-p">¿Qué tipo de estrategias pueden desarrollarse en el marco del desarrollo sostenible?</p>
							<label><input type="radio" name="pregunta10" value="a">  a) Porque promueve la explotación indiscriminada de los recursos naturales.</label><br>
							<label><input type="radio" name="pregunta10" value="b">  b) Porque nos enseña a despreocuparnos del medio ambiente.</label><br>
							<label><input type="radio" name="pregunta10" value="c"> c) Porque permite satisfacer las necesidades del presente sin comprometer la capacidad de las futuras generaciones para satisfacer sus propias necesidades.</label><br>
							
							
							<div class="text-center">
								<input type="submit" value="Enviar" class="btn btn-primary mx-auto">
							</div>
							
						
						</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>

	<div id="resultado"></div>

	<script src="script.js"></script>
	<div class="mb-5"></div>
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