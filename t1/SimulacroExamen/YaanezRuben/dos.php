<form action="tres.php">
<fieldset>
<legend>Signos del zodiaco</legend>

<?php 
$zodiaco=['Capricornio', 'Acuerio', 'Piscis', 'Aries', 'Tauro', 'Géminis', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario'];
$meses=['Enero', 'Febero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

$min=isset($_GET['inferior'])?(int)$_GET['inferior']:0;
$max=isset($_GET['superior'])?(int)$_GET['superior']:0;

for($i=$min-1; $i<$max; $i++){
    $checked=($i==$min-1)?"checked='checked'":"";
    echo "<input type='radio' name='signo' value='$zodiaco[$i]' $checked'>$zodiaco[$i]<br>";
}
?>
</fieldset>
<fieldset>
<legend>Meses</legend>
<select name="mes">
<?php 
for($i=$min-1; $i<$max; $i++){
    echo "<option>$meses[$i]</option>";
}
?>

</select>
</fieldset>
<input type="submit" value="Continuar">
</form>