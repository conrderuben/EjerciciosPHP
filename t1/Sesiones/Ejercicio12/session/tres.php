<?php
session_start();
$_SESSION['numeros'][]=$_POST['num'];
$suma=0;
foreach ($_SESSION['numeros'] as $k => $v){
    echo $v . ($k === array_key_last($_SESSION['numeros']) ? '' : ' + ');
    $suma+=$v;
}
echo '=';
echo $suma;
echo "<br><a href='index.php'>Volver</a>";
?>