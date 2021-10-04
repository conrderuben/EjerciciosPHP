Selecciona una opcion
<?php
$numero=isset($_GET['numero'])? $_GET['numero'] : 1;
$letras=["Uno","Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho", "Nueve", "Ciez", "Once", "Doce", "Trece", "Catorce", "Quince"];

echo <<<HTML
<form action="tres.php">
HTML;
for($i=0; $i<$numero; $i++){
    $v=$i+1;
    echo <<<HTML
    <input type="radio" name="r" value="$v">
    $letras[$i]
HTML;
}
echo <<<HTML
<br>
<input type="submit">
</form>
HTML;




?>