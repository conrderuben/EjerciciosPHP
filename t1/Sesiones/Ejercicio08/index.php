<?php
include('bd.php');
session_start();
$oculta="";
$contiene=0;
$intentos=isset($_SESSION['intentos'])?$_SESSION['intentos']:0;
$letra=isset($_GET['letra'])?strtolower($_GET['letra']):"";
$fallos=isset($_SESSION['fallos'])?$_SESSION['fallos']:0;
$letrasProbadas=isset($_SESSION['letrasProbadas'])?$_SESSION['letrasProbadas']:"";
$aciertos[]=isset($_SESSION['aciertos'])?$_SESSION['aciertos']:[];
$ganar=isset($_SESSION['ganar'])?$_SESSION['ganar']:0;

if(!isset($_SESSION['oculta'])){
    $oculta=$bd[rand ( 0, sizeof ( $bd ) - 1 )];
    $_SESSION['oculta']=$oculta;
}
if($letra!=""){
    
    $_SESSION['intentos']=$intentos+1;
    $letrasProbadas.=$letra." ";
    $_SESSION['letrasProbadas']=$letrasProbadas;
    
    for($i=0; $i<strlen($_SESSION['oculta']); $i++){
        if($_SESSION['oculta'][$i]==$letra){
            $_SESSION['aciertos'][]=$i;
            $contiene++;
            
        }
    }
    $_SESSION['ganar']+=$contiene;
    if($contiene==0){
        $_SESSION['fallos']=$fallos+1;
    }
}else{
    $_SESSION['intentos']=$intentos;
    $_SESSION['letrasProbadas']=$letrasProbadas;
    $_SESSION['fallos']=$fallos;
    $_SESSION['aciertos']=$aciertos;
    $_SESSION['ganar']=$ganar;
}






if($fallos<6){
    if($_SESSION['ganar']==(strlen($_SESSION['oculta']))){
        echo "<h1>Has Ganado!</h1>";
    }else{
        


echo "
<h1>Bienvenido. Para empezar a jugar introduce una letra</h1>
<form>
Introduce letra
<input type='text' maxlength='1' name='letra' size='1'>
<table border='1'>
<tr>";
for($i=0; $i<strlen($_SESSION['oculta']); $i++){
    if(in_array($i, $_SESSION['aciertos'])){
        echo "<td width='20'>{$_SESSION['oculta'][$i]}</td>";
    }else{
        echo "<td width='20'>-</td>";
    }
}
    
    
echo "</table>
<b>Palabra oculta: </b>{$_SESSION['oculta']}<br>
<b>Letras probadas: </b>{$_SESSION['letrasProbadas']}<br>
<b>Numero de intentos: </b>{$_SESSION['intentos']}<br>
<b>Numero de fallos: </b>{$_SESSION['fallos']}/6<br>
<form>";
    }
}else{
    echo "<h1>Has perdido</h1>";
}


?>