<?php
//Para saber los segundos transcurridos desde el 1 ene 1970

echo time();
echo "\n";

//Te pone la fecha en formato
$t=time();
echo date( "(d-M-Y) H:i ",$t);

//Te da los seguntos desde esa fecha pasada por string
echo "\n";
echo strtotime('11/09/2001');

?>