<h1>Contador de visitas</h1>

<?php
$condicion=!isset($_COOKIE['vez']);

if($condicion){
    echo "<h1>Bienvenido</h1>";
    setcookie('n',2);
}else{
    $n=$_COOKIE['vez'];
    echo "<h1>Esta es la vez numero $n que visitas estas página";
    setcookie("vez",$n+1);
}




?>

