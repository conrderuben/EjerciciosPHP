<?php
echo "Introduce una linea de texto: ";
fscanf(STDIN, "%s\n", $texto);

echo "\n";

echo "Introduce n: ";
fscanf(STDIN, "%s\n", $n);

for ($i = 1; $i <= $n; $i ++) {

    echo "<h$i>$texto<h$i>\n";
}
for ($i = $n - 1; $i >= 1; $i --) {

    echo "<h$i>$texto<h$i>\n";
}

?>