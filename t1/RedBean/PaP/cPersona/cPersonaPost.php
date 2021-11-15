<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'John Doe';
$idPaisN= isset($_POST['idPaisN']) ? $_POST['idPaisN'] : null;
$idPaisV= isset($_POST['idPaisV']) ? $_POST['idPaisV'] : null;
//$nombrePais= isset($_POST['nombrePais']) ? $_POST['nombrePais'] : null;
$idAficionesGusta = isset($_POST['idAficionesGusta']) ? $_POST['idAficionesGusta'] : [];
$idAficionesOdio = isset($_POST['idAficionesOdio']) ? $_POST['idAficionesOdio'] : [];

conectar();
$persona=R::dispense('persona');
$persona->nombre = $nombre;
//$pNace = R::load('pais',$idPaisN);
//$pNace->alias('nace')->xownPersonaList [] = $persona;
if ($idPaisN != 'ninguno') {
    $persona->nace = R::load('pais',$idPaisN);
}
$persona->vive = R::load('pais',$idPaisV);
//$persona->pais = R::findOne('pais','nombre=?',[$nombrePais]);
foreach ($idAficionesGusta as $idAficionGusta) {
   $aficionGusta = R::load('aficion',$idAficionGusta);
   $gusta=R::dispense('gusta');
   $gusta->aficion=$aficionGusta;
   $gusta->persona=$persona;
   R::store($gusta);
}

foreach ($idAficionesOdio as $idAficionOdio) {
    $aficionOdio= R::load('aficion',$idAficionOdio);
    $odio=R::dispense('odio');
    $odio->aficion=$aficionOdio;
    $odio->persona=$persona;
    R::store($odio);
}


R::store($persona);
desconectar();

header('Location:../rPersona/rPersonaGet.php');
?>