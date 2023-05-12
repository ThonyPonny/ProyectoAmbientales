<?php
		session_start();
		include("conexion.php");
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
    <script src="libs/jquery-3.6.4.min.js"></script>
    <script src="libs/plotly-2.20.0.min.js"></script>
    <link rel="icon" href="img/unach.png">
    <title>Gráfica-Salvando el cañon</title>
    
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
            <a href="logout.php">Cerrar sesión</a>
		</nav>

	</div>
</header>


<body class="d-flex flex-column min-vh-100 bg-Green">
    <div class="mb-5"></div>
    <div class="mb-5"></div>
    <div class="mb-5"></div>
    <div class="container">
        
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Grafica de resultados de las encuestas</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <div id="cargabarras"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4"></div>
    <div class="mb-4">
        <p class="formulario">
        Con la ayuda de la gráfica generada a partir de los resultados de la encuesta, podremos 
        obtener una perspectiva más clara y detallada sobre el nivel de conocimiento general que 
        la población tiene acerca de la educación ambiental. Esto nos permitirá identificar áreas 
        de oportunidad en cuanto a la educación y concienciación ambiental, así como también evaluar 
        el impacto de campañas o programas educativos relacionados con el medio ambiente. La información 
        obtenida a partir de la gráfica puede ser utilizada para desarrollar estrategias más efectivas para 
        promover la educación ambiental y crear una sociedad más consciente y comprometida con el cuidado y la 
        preservación del medio ambiente.
        </p>
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

<script type='text/javascript'>
        $(document).ready(function() {
            $('#cargabarras').load('graficabarras.php');
        });
</script>