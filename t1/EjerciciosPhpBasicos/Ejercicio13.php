<?php
$cifrar = "***********************************";
$prohibidas = [
    "tonto",
    "asqueroso"
];

echo "Introduce una cadena: ";
$cadenaOriginal = readline();

foreach ($prohibidas as $palabra) {

    $cadenaOriginal = str_replace($palabra, substr($cifrar, 0, strlen($palabra)), $cadenaOriginal);
}
echo $cadenaOriginal;

?>