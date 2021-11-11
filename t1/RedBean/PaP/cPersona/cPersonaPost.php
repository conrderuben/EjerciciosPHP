<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'John Doe';
$idPais= isset($_POST['idPais']) ? $_POST['idPais'] : null;
//$nombrePais= isset($_POST['nombrePais']) ? $_POST['nombrePais'] : null;
$idAficiones = isset($_POST['idAficiones']) ? $_POST['idAficiones'] : [];

conectar();
$persona=R::dispense('persona');
$persona->nombre = $nombre;
$persona->pais = R::load('pais',$idPais);
//$persona->pais = R::findOne('pais','nombre=?',[$nombrePais]);
foreach ($idAficiones as $idAficion) {
   $persona->sharedAficionList[] = R::load('aficion',$idAficion);
}

R::store($persona);
desconectar();

header('Location:../rPersona/rPersonaGet.php');
?>