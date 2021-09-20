<?php
//Se puede hacer de dos formas
$a = [1,2,3,4,5,6,7,8];
//$a = array(20,40,60);

//Para el tamaño
echo sizeof($a);

echo "\n";

foreach ($a as $n){
    echo $n;
}

echo "\n";

//PAra saber la posicion del array
foreach ($a as $k => $n){
    echo "($k)$n ";
}

//Si el array solo tuviese posiciones 1 y 5 por ejemplo
//no se podria hacer con un for normal, tendria que ser foreach

echo "\n";

//Arrays asociativos
$a[10]=100;
$a[20]=200;
$a[30]='pepe';
$a['pepe']=100;


foreach ($a as $k => $n){
    echo "($k)$n ";
}

echo "\n";

$colorFavorito['pepe']="azul";
$colorFavorito["maria"]='rosa';

echo $colorFavorito["pepe"];
echo " --- ";

$nombre = "maria";
echo $colorFavorito[$nombre];

echo "\n";

//PAra dar valor a los incices y al contenido a la vez

$colorFavorito=['maria'=>'rosa', 'pepe'=>'azul'];








?>