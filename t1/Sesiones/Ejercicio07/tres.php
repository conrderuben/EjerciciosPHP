<?php
session_start();
if(isset($_REQUEST['submit2'])){
    $_SESSION['departamento']=isset($_REQUEST['departamento'])?$_REQUEST['departamento']:null;
    $_SESSION['salario']=isset($_REQUEST['salario'])?$_REQUEST['salario']:null;
    $_SESSION['comentarios']=isset($_REQUEST['comentarios'])?$_REQUEST['comentarios']:null;
    
}

$cuentaCorriente=isset($_SESSION['cuentaCorriente']) ? $_SESSION['cuentaCorriente'] : '';

echo "<form action='resumen.php'>
<fieldset>
<legend>Datos bancarios</legend>
Cuenta corriente <input type='text' name='cuentaCorriente' value=$cuentaCorriente><br>
<input type='submit' name='submit3' value='Grabar informacion e ir al resumen final'>
</fieldset>
</form>";