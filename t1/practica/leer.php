<?php
session_start();
echo "Usuario actual " . $_SESSION['bd']['_activo'] . "<br>";
echo "<h2>Lista de mensajes de {$_GET['user']}</h2><br>";
echo "<table>
<tr><th>Fecha</th><th>Texto</th></tr>";
foreach ($_SESSION['bd']['usuarios'][$_GET['user']]['mensajes'] as $k => $v){
    echo "<tr><td>{$k['fecha']}</td><td>{$k['texto']}</td></tr>";
    
}

echo "</table>";