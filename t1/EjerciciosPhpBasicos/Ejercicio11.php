<?php

$cadena="Alberto:Garay:913334455//Ana:Garcia:914445566";
$personas=explode('//',$cadena );


foreach ($personas as $persona){

    $elementos=explode(':', $persona );
    
    echo "Nombre: $elementos[0]\n";
    echo "Apellido: $elementos[1]\n";
    echo "Telefono: $elementos[2]\n";
    echo "===================\n";
}

    

?>