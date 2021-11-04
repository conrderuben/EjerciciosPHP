<?php
$f=fopen("articulo.txt", "r");
echo "<textarea>";

//echo file_get_contents("articulo.txt"); Otra forma
while(!feof($f)){
    echo fgets($f);
}
echo "</textarea>";
fclose($f);
