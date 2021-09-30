<?php
$nu= isset($_GET['resultado']) ? $_GET['resultado']: 5 ;
$nu= $nu>5 ? 5: $nu ;
echo  <<<HTML
<form action="texto.php">

 
HTML;
for($j=1;$j<=$nu;$j++){
    
    echo  <<<HTML
<input type="checkbox" name="check" value="$j">
$j

HTML;
}
echo<<<HTML2
<input type="submit" name="boton" value="Aceptar">
</form>

HTML2;



?>