<?php 
session_start();
$_SESSION['bd']['_activo']=$_GET['usuario'];


echo "Usuario actual " + $_SESSION['bd']['_activo'] + "<br>";

echo "<h2>Lista de usuarios / mensajes</h2><br>";

foreach ($_SESSION['bd']['usuarios'] as $k => $v){
    echo $k + " ";
    if($v[$_SESSION['bd']['_activo']]['mensajes']==[]){
        echo "      <a href='escribir.php'>Escribir</a>";
    }else{
        echo "(" + sizeof($v[$_SESSION['bd']['_activo']]['mensajes']) + ")" + "<a href='leer.php'>Leer</a><a href='escribir.php'>Escribir</a>";
    }
    
}

echo "<br><a href='login.php'>Volver al login</a>";

?>
