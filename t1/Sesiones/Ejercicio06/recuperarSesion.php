<h1>Datos recuperados</h1>
<?php

session_start();

$entero=$_SESSION['entero'];
$real=$_SESSION['real'];
$texto=$_SESSION['texto'];
$fecha=$_SESSION['fecha'];
$semaforo=$_SESSION['semaforo'];

echo <<<HTML
<h2>Numero entero recuperado:$entero<h2>
<h2>Numero real recuperado:$real<h2>
<h2>Texto recuperado:$texto<h2>

HTML;
echo '<h2>Semaforo: ',print_r($semaforo),'</h2><br/>';
echo '<h2>Fecha: ',print_r($fecha),'</h2><br/>';

?>
