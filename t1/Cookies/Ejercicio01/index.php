<?php

function generaCadenaAleatoria($longitud = 5) {
    $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $base = strlen($charset);
    $result = '';
    $now = explode(' ', microtime())[1];
    while ($now >= $base){
        $i = $now % $base;
        $result = $charset[$i] . $result;
        $now /= $base;
    }
    return substr($result, -5);
}

$condicion=!isset($_COOKIE['UID']);
setcookie("UID", generaCadenaAleatoria());
if($condicion){
    echo "<h1>Hola desconocido. A partir de ahora te recordare</h1>";
    
 
}else{
    $ck=$_COOKIE['UID'];

    echo "<h1>Hola de nuevo. Te conozco como UID=$ck</h1>";
    
}
?>