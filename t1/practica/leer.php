<?php
session_start();
echo "Usuario actual " . $_SESSION['bd']['_activo'] . "<br>";
echo "<h2>Lista de mensajes de {$_GET['user']}</h2><br>";
echo "<table>
<tr><th>Fecha</th><th>Texto</th></tr>";
foreach ($_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'] as $k => $v) {
    if ($_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'][$k]['remitente'] == $_GET['user']) {
        echo "<tr><td>{$_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'][$k]['fecha']}</td><td>{$_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'][$k]['texto']}</td></tr>";
    }
}
echo "</table>";
echo "<br><a href='listaUsuarios.php'>Volver a lista de usuarios</a>";
?>
