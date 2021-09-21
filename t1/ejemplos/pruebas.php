<?php

$array=[6=>200];
$array[]=400;
$array[]=500;
$array[]=600;
//array_unshift($array, 4);
array_shift($array);
print_r($array);
?>