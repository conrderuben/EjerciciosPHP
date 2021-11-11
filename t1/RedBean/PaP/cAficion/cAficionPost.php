<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Nunca Jamás';

conectar();
$a=R::dispense('aficion');
$a->nombre = $nombre;
R::store($a);
desconectar();

header('Location:../rAficion/rAficionGet.php');
?>