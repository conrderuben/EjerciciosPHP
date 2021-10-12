<?php
include("bdUsuarios.php");

$usuario=isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : null;
$clave=isset($_REQUEST['clave']) ? $_REQUEST['clave'] : null;

if(isset($bdUsuario[$usuario]) && $bdUsuario[$usuario]==$clave){
    if(isset($_COOKIE[$usuario])){
    $datos= explode ("/",  $_COOKIE[$usuario]);
    $nVisitas=$datos[0];
    $bandera=$datos[1];
    
}else{
    $nVisitas=1;  
    $bandera='es';
}
    
    
if($bandera=='es'){
    echo <<<HTML
Conectado como $usuario. Numero de visitas:$nVisitas.<br>
<form action="login.php">
<input type="submit" value="desconectar">
<img src="/img/es.png"><input type="radio" value="es" width="27" height="18" name="bandera" checked="checked">
<img src="/img/fr.png"><input type="radio" value="fr" width="27" height="18" name="bandera">
<img src="/img/uk.png"><input type="radio" value="uk" width="27" height="18" name="bandera">
<input type="hidden" name="usuario" value="$usuario">
<input type="hidden" name="nVisitas" value="$nVisitas\">
</form>

HTML;
}else if($bandera=='fr'){
    echo <<<HTML
Conectado como $usuario. Numero de visitas:$nVisitas.<br>
<form action="login.php">
<input type="submit" value="desconectar">
<img src="/img/es.png"><input type="radio" value="es" width="27" height="18" name="bandera">
<img src="/img/fr.png"><input type="radio" value="fr" width="27" height="18" name="bandera" checked="checked">
<img src="/img/uk.png"><input type="radio" value="uk" width="27" height="18" name="bandera">
<input type="hidden" name="usuario" value="$usuario">
<input type="hidden" name="nVisitas" value="$nVisitas\">
</form>

HTML;
}else if($bandera=='uk'){
    echo <<<HTML
Conectado como $usuario. Numero de visitas:$nVisitas.<br>
<form action="login.php">
<input type="submit" value="desconectar">
<img src="/img/es.png"><input type="radio" value="es" width="27" height="18" name="bandera">
<img src="/img/fr.png"><input type="radio" value="fr" width="27" height="18" name="bandera">
<img src="/img/uk.png"><input type="radio" value="uk" width="27" height="18" name="bandera" checked="checked" >
<input type="hidden" name="usuario" value="$usuario">
<input type="hidden" name="nVisitas" value="$nVisitas\">
</form>

HTML;
}
}else{
    echo "<h1>El usuario no exite</h1>";
}





?>