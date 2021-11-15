<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Nunca Jamás';
$idsPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : [];

conectar();
$p=R::dispense('pais');
$p->nombre = $nombre;
foreach ($idsPersona as $idPersona) {
    $persona = R::load('persona',$idPersona);
    $p->alias('nace')->ownPersonaList [] = $persona;
}
R::store($p);
desconectar();

header('Location:../rPais/rPaisGet.php');
?>