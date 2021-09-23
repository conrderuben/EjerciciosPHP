<?php

$array=[6=>200];
$array[]=400;
$array[]=500;
$array[]=600;
//array_unshift($array, 4);
array_shift($array);
print_r($array);

$x=7;
function doble($x)
{
    $x = 2 * $x;
    return $x;
}
echo doble($x);
echo "\n";
echo $x;

$bd=[];
$bd['ruben'][0]=1;
print_r($bd);


?>