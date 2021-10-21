<?php
session_start();
$usuario=isset($_GET['usuario'])?$_GET['usuario']:"";
$contraseña=isset($_GET['contraseña'])?$_GET['contraseña']:"";
if(!array_key_exists($usuario, $_SESSION['bd']['usuarios'])){
    echo "Usuario no encontrado";
}else{

if($contraseña==$_SESSION['bd']['usuarios'][$usuario]['pwd']){
    
    if (isset($_GET['textarea'])) {
        $_SESSION['bd']['usuarios'][$_GET['para']]['mensajes'][] = [
            'remitente' => $_GET['de'],
            'fecha' => date("d") . date("M") . date("Y"),
            'texto' => $_GET['textarea']
        ];
        print_r($_SESSION['bd']['usuarios'][$_GET['para']]['mensajes']);
    }
    
    if (isset($_GET['usuario'])) {
        $_SESSION['bd']['_activo'] = $_GET['usuario'];
    }
    
    echo "Usuario actual " . $_SESSION['bd']['_activo'] . "<br>";
    
    echo "<h2>Lista de usuarios / mensajes</h2><br>";
    foreach ($_SESSION['bd']['usuarios'] as $k => $v) {
        $cont = 0;
        if ($k == $_SESSION['bd']['_activo']) {
            
        } else {
            echo $k . "             ";
            if (empty($_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'])) {
                echo "($cont)  <a href='escribir.php?para=$k'>Escribir</a><br>";
            } else {
                foreach ($_SESSION['bd']['usuarios'][$_SESSION['bd']['_activo']]['mensajes'] as $n => $m) {
                    if ($m['remitente'] == $k) {
                        $cont ++;
                    }
                }
                
                echo "($cont)" . "<a href='leer.php'>Leer</a><a href='escribir.php?para=$k'>Escribir</a><br>";
            }
        }
    }
    
    echo "<br><a href='login.php'>Volver al login</a>";
}else{
    echo "Contraseña no valida";
}
}

?>
