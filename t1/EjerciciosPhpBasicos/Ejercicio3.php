<?php
echo "Dime un numero n: ";
fscanf(STDIN, "%d\n", $n);

echo "Dime un numero p: ";
fscanf(STDIN, "%d\n", $p);

if ($p <= 0 && $p >= 11) {
    echo "Dime un numero p entre 1 y 10: ";
    fscanf(STDIN, "%d\n", $p);
} else {
    for ($i = 0; $i < $n; $i ++) {
        for ($j = 0; $j < $p; $j ++) {
            echo "$j ";
        }
        echo "|| ";
    }
}

?>