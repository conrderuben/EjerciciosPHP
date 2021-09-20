<?php
/*
$f="";
$p="rey";
echo "Dime un numero n: ";
fscanf(STDIN, "%d\n", $n);

for($i=1; $i<=$n; $i++){
    switch($p){
        case "as": $p="dos";break;
        case "dos": $p="tres";break;
        case "tres": $p="cuatro";break;
        case "cuatro":$p="cinco";break;
        case "cinco": $p="seis";break;
        case "seis": $p="siete";break;
        case "siete": $p="sota";break;
        case "sota": $p="caballo";break;
        case "caballo": $p="rey";break;
        case "rey": $p="as";break;
    }
    $f="$f $p"; 
}
echo $f;
*/ 


echo "Introduce n: ";
fscanf ( STDIN, "%d\n", $n );

$carta = ['as','dos','tres','cuatro','cinco','seis','siete','sota','caballo','rey'];

for($i = 0; $i < $n; $i ++) {
    echo $carta[$i%10], ' ';
}

?>