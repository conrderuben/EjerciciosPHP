<?php 
$esAjax=isset($_SERVER["HTTP_X_REQUESTED_WITH"])?strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest':false;
if($esAjax){
    

$r=rand(1, 3);
$rh=rand(1,3);


if($r==1){
    echo "<h$rh>Hola {$_GET['nombre']}</$rh>";
}
if($r==2){
    echo "<h$rh>Que pasa {$_GET['nombre']}</$rh>";
}
if($r==3){
    echo "<h$rh>Que tal estas {$_GET['nombre']}</$rh>";
}
}else{
    echo "<h1>No es AJAX</h1>";
}
?>
