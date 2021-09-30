<?php
$n=isset($_GET['numero']) ? $_GET['numero']: 3;
echo  <<<HTML
<form action="checkbox.php">

HTML;
for($i=1;$i<=$n;$i++){

  echo  <<<HTML
<input type="radio" name="resultado" value="$i">
$i
        
HTML;
}
echo<<<HTML2
<input type="submit" name="boton" value="Aceptar">
</form>
    
HTML2;



?>