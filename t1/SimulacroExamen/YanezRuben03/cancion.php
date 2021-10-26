
<?php
$r=rand(1,4);
switch($r){
    case 1:$resultado="Let it be";break;
    case 2:$resultado="Mediterraneo";break;
    case 3:$resultado="Close to the edge";break;
    case 4:$resultado="Bohemian rhapsody";break;
}
echo $resultado;