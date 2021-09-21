<?php
$cifrar="***********************************";



echo "Introduce una cadena: ";
$cadena=readline();

echo "Introduce una palabra para cifrar: ";
fscanf(STDIN, "%s\n", $palabra);

echo str_replace($palabra,substr($cifrar, 0, strlen($palabra)), $cadena);


?>
