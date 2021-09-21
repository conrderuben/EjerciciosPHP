<?php
$array=[
"romano"=>["i","ii","iii","iv","v","vi","vii","viii","ix","x"],
"nombre"=>["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"]
];

echo "Dime un numero entre 1 y 10: ";
fscanf(STDIN,"%d\n", $n);

echo "Dme el formato: ";
fscanf(STDIN,"%s\n", $formato);

for($i=0; $i<$n;$i++){
    echo $array[$formato][$i];
    echo ($i!=$n-1)?', ':'';
}



?>