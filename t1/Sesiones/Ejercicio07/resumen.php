<?php
session_start();

if(isset($_REQUEST['submit3'])){
    $_SESSION['cuentaCorriente']=isset($_REQUEST['cuentaCorriente']) ? $_REQUEST['cuentaCorriente'] : null;
}
$nombre=isset($_SESSION['nombre'])?$_SESSION['nombre']:'No definido';
$apellido=isset($_SESSION['apellido'])?$_SESSION['apellido']:'No definido';
$fecha=isset($_SESSION['fecha'])?$_SESSION['fecha']:'No definida';
$genero=isset($_SESSION['genero'])?$_SESSION['genero']:'No definida';
$casado=isset($_SESSION['pareja'])?'Si':'No';
$hijos= isset($_SESSION['hijos'])?'Si':'No';
$nacionalidades = isset($_SESSION['nacionalidades'])?$_SESSION['nacionalidades']:"No definidas";

$departamento=isset($_SESSION['departamento']) ? $_SESSION['departamento'] : 'No definido';
$salario=isset($_SESSION['salario']) ? $_SESSION['salario'] : 'No definido';
$comentarios=isset($_SESSION['comentarios']) ? $_SESSION['comentarios'] : 'No definido';

$cuentaCorriente=isset($_SESSION['cuentaCorriente']) ? $_SESSION['cuentaCorriente'] : 'No definida';

echo "<fieldset>
<legend>Datos Personales</legend>
Nombre: $nombre <br>
Apellidos: $apellido <br>
Fecha de nacimiento: $fecha <br>
Genero: $genero <br>
Casado: $casado <br>
Hijos: $hijos <br>
Nacionalidades: $nacionalidades <br>

</fieldset>
<fieldset>
<legend>Datos Profesionales</legend>
Departamento: $departamento <br>
Salario: $salario <br>
Comentarios: $comentarios <br>
</fieldset>

<fieldset>
<legend>Datos Bancarios</legend>
Cuenta corriente: $cuentaCorriente
</fieldset><br>";

echo "<a href='index.php'>Volver al principio</a>";

?>