<?php

session_start();


$_SESSION['entero']=10;
$_SESSION['real']=3.1416;
$_SESSION['texto']="Este es el texto";
$_SESSION['fecha']=date_create('2002-03-06');
$_SESSION['semaforo']=['r'=>'rojo', 'a'=>'amarillo', 'v'=>'verde'];

?>
<h2>Datos registrados</h2><br>
<a href="recuperarSesion.php">Recuperar los datos</a>
