<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="libs/jquery-3.6.4.min.js"></script>
    <script src="libs/plotly-2.20.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                
                <div id="cargabarras"></div>
                
            </div>
			
        </div>
    </div>
</body>
</html>

<script type='text/javascript'>
        $(document).ready(function() {
            $('#cargabarras').load('graficabarras.php');
        });
</script>