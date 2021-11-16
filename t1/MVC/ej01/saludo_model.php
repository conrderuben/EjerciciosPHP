<?php
function getSaludos() {
    $db = new PDO ("mysql:host=localhost;dbname=test","root","");
    $filas = $db->query("select texto from saludo");
    $saludos = [];
    foreach ($filas as $fila ) {
        $saludos[] = $fila['texto'];
    }
    return $saludos;
}
?>