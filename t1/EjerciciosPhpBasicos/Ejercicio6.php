<?php
$nombre = "";
$edad = 0;

while ($nombre != "fin") {
    echo "Nombre? ";
    fscanf(STDIN, "%s\n", $nombre);

    if ($nombre != "fin") {
        echo "\n";

        echo "Edad? ";
        fscanf(STDIN, "%d\n", $edad);
        $array[$nombre] = $edad;
    }
}
foreach ($array as $k => $v) {
    echo "$k ($v)\n";
}

echo "\n";
echo "ordenado por nombre:";
echo "\n";
ksort($array);
foreach ($array as $k => $v) {
    echo "$k ($v)\n";
}

echo "\n";
echo "ordenado por edad:";
echo "\n";

arsort($array);
foreach ($array as $k => $v) {
    echo "$k ($v)\n";
}

?> 