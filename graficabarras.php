<?php
  include('comandos.php');

  for ($i = 0; $i <= 10; $i++) {
    $count = consulta($i);
    $resultados[] = $count;
  }
  $agregado = range(0, 10);
  $datosx = json_encode($agregado);
  $datosy = json_encode($resultados);


?>

<script type="text/javascript">
  function creaCadena(json){
    var parsed = JSON.parse(json);
    var arr = [];
    for(var x in parsed){
      arr.push(parsed[x]);
    }
    return arr;
  }

</script>


<div id="barras"></div>

<script type="text/javascript">
  datosX=creaCadena('<?php echo $datosx ?>');
  datosY=creaCadena('<?php echo $datosy ?>');
    var data = [
  {
    x: datosX,
    y: datosY,
    type: 'bar'
    
  }
];

Plotly.newPlot('barras', data);
</script>