<?php
include_once 'bd.php';
$texto=isset($_GET['texto'])?$_GET['texto']:null;
$filtro=isset($_GET['filtro'])?$_GET['filtro']:null;

echo "<table>";
echo "<tr><th>Nombre</th><th>Apellido</th><th>Telefono</th></tr>";
foreach ($bd as $v){
    strtolower($filtro);
    strtolower($texto);
    foreach ($v as $k=>$c){
    if($filtro==$k){
        if(substr($c, 0, 1)==substr($texto, 0, 1)){
        echo "<tr><td>$v[0]</td><td>$v[1]</td><td>$v[2]</td></tr>";
        echo "</table>";
    }
}
}
}
?>