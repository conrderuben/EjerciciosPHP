<!-- Using sessions, simulate a step-by-step record in which you progress through 
various forms to a screen that shows the summary of the information entered so far.
 At any time you can go back to a previous step and you must keep the information previously entered in the form. -->


<?php
session_start();
    
$nombre=isset($_SESSION['nombre'])?$_SESSION['nombre']:'';
$apellido=isset($_SESSION['apellido'])?$_SESSION['apellido']:'';
$fecha=isset($_SESSION['fecha'])?$_SESSION['fecha']:'';
$genero=isset($_SESSION['genero'])?$_SESSION['genero']:'m';
$casado=isset($_SESSION['pareja'])?$_SESSION['pareja']:'';
$hijos= isset($_SESSION['hijos'])?true:false;
$nacionalidades = isset($_SESSION['nacionalidades'])?$_SESSION['nacionalidades']:"Española";


echo "
<form action='dos.php'>
<fieldset>
<legend>Datos Personales</legend>
Nombre
<input type='text' name='nombre' value=$nombre>
Apellidos
<input type='text' name='apellido' value=$apellido><br>
Fecha de nacimiento
<input type='date' name='fecha' value=$fecha><br>
Genero-->";

if($genero=='m'){
    echo "Mujer<input type='radio' name='genero' value='m' checked='checked'>
Hombre<input type='radio' name='genero' value='h'>
Otro<input type='radio' name='genero' value='o'><br>";
}else if($genero=='h'){
    echo "Mujer<input type='radio' name='genero' value='m'>
Hombre<input type='radio' name='genero' value='h' checked='checked'>
Otro<input type='radio' name='genero' value='o'><br>";
}else if($genero='o'){
    echo "Mujer<input type='radio' name='genero' value='m'>
Hombre<input type='radio' name='genero' value='h'>
Otro<input type='radio' name='genero' value='o' checked='checked'><br>";
}

if($casado=="pareja"){
    echo "Casado o Pareja de hecho<input type='checkbox' name='pareja' value='pareja' cheked='checked'>";
}else{
    echo "Casado o Pareja de hecho<input type='checkbox' name='pareja' value='pareja'>";  
}

if($hijos){
    echo "Hijos<input type='checkbox' name='hijos' value='hijos' checked='checked'><br>";
}else{
    echo "Hijos<input type='checkbox' name='hijos' value='hijos'><br>";
    
}
/*Nacionalidades
<select name="select" multiple="multiple">
  <option value="Española">Española</option>
  <option value="Francesa" >Francesa</option>
  <option value="Italiana">Italiana</option>
  <option value="Portuguesa">Portuguesa</option>
</select>
*/
echo "<input type='submit' name='submit1' value='Grabar informacion e ir al paso 2- Datos profesionales'>
</fieldset>
</form>";

?>

