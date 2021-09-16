<?php
$n=0;
$c='.'; //PATRON +-.
echo "Introduce un numero: ";
fscanf(STDIN, "%d\n", $n);

for($i=$n; $i>0; $i--){
    for($j=1; $j<=$i; $j++ ){
        switch ($c){
            case '+': $c='-';break;
            case '-': $c='.';break;
            case '.': $c='+';break;
        }
        echo $c;
    }
    echo "\n";
    
}


?>