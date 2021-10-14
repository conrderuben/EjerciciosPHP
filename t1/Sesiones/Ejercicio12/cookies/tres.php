<?php
$suma=0;
foreach (unserialize($_COOKIE['numeros']) as $k => $v){
    echo $v . ($k === array_key_last(unserialize($_COOKIE['numeros'])) ? '' : ' + ');
    $suma+=$v;
}
$suma+=$_POST['num'];
echo ' + '.$_POST['num'].' = ';
echo $suma;
echo "<br><a href='index.php'>Volver</a>";
?>