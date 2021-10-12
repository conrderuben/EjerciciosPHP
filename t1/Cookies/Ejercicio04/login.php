<?php
$usuario=isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : null;
$nVisitas=isset($_REQUEST['nVisitas']) ? $_REQUEST['nVisitas'] : null;
$bandera=isset($_REQUEST['bandera']) ? $_REQUEST['bandera'] : null;

if($usuario==null && $nVisitas==null && $bandera==null){
    $mensaje="Primera ejecución";
}else{
    setcookie($usuario,($nVisitas+1)."/".$bandera);
    $mensaje="Adios ".$usuario;
    
}
echo<<<HTML
<h1>Tratamiento de cookies<h1><br>
$mensaje.Usted no está conectado.<br>
<form action="bienvenida.php">
Usuario<input type="text" name="usuario"><br>
Clave<input type="text" name="clave"><br>
<input type="submit" value="autenticar">
</form>

HTML;

?>