<?php
$_COOKIE['numeros'][]=$_POST['num'];
$suma=0;
foreach (unserialize($_COOKIE['numeros']) as $k => $v){
    echo $v . ($k === array_key_last(unserialize($_COOKIE['numeros'])) ? '' : ' + ');
    $suma+=$v;
}
echo '=';
echo $suma;
echo "<br><a href='index.php'>Volver</a>";
?>