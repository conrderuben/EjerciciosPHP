<?php

$array=[
    "romano"=>["i","ii","iii","iv","v","vi","vii","viii","ix","x"],
    "nombre"=>["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"]
];

do{
echo "Dime un numero entre 1 y 10: ";
fscanf(STDIN,"%d\n", $n);
}while ($n<1 || $n>10);

do{
echo "Dame el formato: ";
fscanf(STDIN,"%s\n", $formato);
}while(!array_key_exists($formato, $array));

for($i=0; $i<$n;$i++){
    echo $array[$formato][$i];
    echo ($i!=$n-1)?', ':'';
}



?>