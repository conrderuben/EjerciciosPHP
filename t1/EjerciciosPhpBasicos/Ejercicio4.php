<?php
$n = 1;
$suma = 0;
$multiplicacion = 1;
while ($n != 0) {
    echo "Dime un numero n: ";
    fscanf(STDIN, "%d\n", $n);

    if ($n != 0) {
        $suma = $suma + $n;
        $multiplicacion = $multiplicacion * $n;
    }
}
echo "Operación? ";
fscanf(STDIN, "%s\n", $o);
switch ($o) {
    case "sumar":
        echo "La suma vale $suma";
        break;
    case "multiplicar":
        echo "La multiplicacion vale $multiplicacion";
        break;
    default:
        echo "No encontrado";
        break;
}

?>