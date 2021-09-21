<?php
// Se puede hacer de dos formas
$a = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8
];
// $a = array(20,40,60);

// Para el tamaño
echo sizeof($a);

echo "\n";

foreach ($a as $n) {
    echo $n;
}

echo "\n";

// PAra saber la posicion del array
foreach ($a as $k => $n) {
    echo "($k)$n ";
}

// Si el array solo tuviese posiciones 1 y 5 por ejemplo
// no se podria hacer con un for normal, tendria que ser foreach

echo "\n";

// Arrays asociativos
$a[10] = 100;
$a[20] = 200;
$a[30] = 'pepe';
$a['pepe'] = 100;

foreach ($a as $k => $n) {
    echo "($k)$n ";
}

echo "\n";

$colorFavorito['pepe'] = "azul";
$colorFavorito["maria"] = 'rosa';

echo $colorFavorito["pepe"];
echo " --- ";

$nombre = "maria";
echo $colorFavorito[$nombre];

echo "\n";

// PAra dar valor a los incices y al contenido a la vez

$colorFavorito = [
    'maria' => 'rosa',
    'pepe' => 'azul'
];

//

echo "Dame un numero (0 para terminar): ";
fscanf(STDIN, "%d\n", $num);
$numeros = [2 => 100];
//Aunque yo le asgine la posicion 2 con el array push le asigna el siguiente

while ($num != 0) {
    array_push($numeros,$num); //Añade a la siguiente estancia del array $nuemros la variable $num
    $numeros[]=$num; //Es similar
    echo "Dame un numero (0 para terminar): ";
    fscanf(STDIN, "%d\n", $num);
}
foreach ($numeros as $numero) {
    echo "$numero";
}

//lifo =pila = stack
//fifo = cola = queue

//PILAS
//array_pop coje el ultimo valor de la pila y los destruye

//COLAS
array_unshift();//Colar por delante
array_shift();//Como el pop pero por el principio, por la cola
in_array(10,$numeros);//Devulve true o false, dependiendo de si se encuentra o no en el array

//
print_r($numeros);//Es para escribir arrays

array_keys($numeros);//Crea un array de indices








?>