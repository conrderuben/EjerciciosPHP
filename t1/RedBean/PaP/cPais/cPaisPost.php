<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Nunca Jamás';

conectar();
$p=R::dispense('pais');
$p->nombre = $nombre;
R::store($p);
desconectar();

header('Location:../rPais/rPaisGet.php');
?>