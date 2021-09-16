<?php
$n = 1;
echo "Introduce n: ";
fscanf(STDIN, "%d\n", $n);
$max = $n;
$min = $n;
while ($n != 0) {
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n", $n);
    $min = ($n != 0 && $n < $min) ? $n : $min;
    $max = ($n != 0 && $n > $max) ? $n : $max;
}

echo "\n";
echo "Maximo: $max\n";
echo "Minimo: $min\n";

?>