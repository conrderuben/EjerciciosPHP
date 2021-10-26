<?php
$r=rand(1,4);
switch($r){
    case 1:$resultado="Star Wars";break;
    case 2:$resultado="Titanic";break;
    case 3:$resultado="Crepusculo";break;
    case 4:$resultado="Los juegos del hambre";break;
}
echo $resultado;