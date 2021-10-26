<?php
session_start();
$usuario = isset($_GET['usuario']) ? $_GET['usuario'] : "";
$contraseña = isset($_GET['contraseña']) ? $_GET['contraseña'] : "";
if (isset($_GET['usuario']) && ! array_key_exists($usuario, $_SESSION['bd']['usuarios'])) {
    echo "Usuario no encontrado";
    header("refresh:3; url=login.php");
} else {
    $valido = true;

    if (isset($_GET['usuario'])) {
        if ($contraseña != $_SESSION['bd']['usuarios'][$usuario]['pwd']) {
            $valido = false;
        }
    }

    if ($valido) {

        if (isset($_GET['textarea'])) {
            $_SESSION['bd']['usuarios'][$_GET['para']]['mensajes'][] = [
                'remitente' => $_GET['de'],
                'fecha' => date("d") ."-". date("M") ."-". date("Y") . "(" .date("G") . ":" . date("i") . ")",
                'texto' => $_GET['textarea']
            ];
        }

        if (isset($_GET['usuario'])) {
            $_SESSION['bd']['_activo'] = $_GET['usuario'];
            if (isset($_GET['recordar']) && $_GET['recordar'] == true) {
                $_SESSION['bd']['_recordar'] = true;
                echo "hola";
            } else {
                $_SESSION['bd']['_recordar'] = false;
            }
        }

        echo "Usuario actual " . $_SESSION['bd']['_activo'] . "<br>";

        echo "<h2>Lista de usuarios / mensajes</h2><br>";
        foreach ($_SESSION['bd']['usuarios'] as $k => $v) {
            $cont = 0;
            if ($k == $_SESSION['bd']['_activo']) {} else {
                echo $k . "             ";
                if (empty($_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'])) {
                    echo "($cont)  <a href='escribir.php?para=$k'>Escribir</a><br>";
                } else {
                    foreach ($_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'] as $n => $m) {
                        if ($m['remitente'] == $k) {
                            $cont ++;
                        }
                    }

                    echo "&nbsp;($cont)&nbsp;&nbsp;" . "<a href='leer.php?user=$k'>Leer</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='escribir.php?para=$k'>Escribir</a><br>";
                }
            }
        }

        echo "<br><a href='login.php'>Volver al login</a>";
    } else {
        echo "Contraseña no valida";
    }
}

?>
