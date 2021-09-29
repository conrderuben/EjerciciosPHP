<?php
$n=$_GET['numero'];
echo  <<<HTML
<form action="checkbox.php">

HTML;
for($i=0;$i<$n;$i++){

  echo  <<<HTML
<input type="checkbox" name="boton" value="$i">
        
HTML;
}
echo<<<HTML2
<input type="submit" name="boton" value="Aceptar">
</form>
    
HTML2;



?>