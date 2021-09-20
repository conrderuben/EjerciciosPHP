<?php
//Para saltos de linea hay que poner siempre \n, no exite echoln como si fuese java
$x = "Hola";
    echo $x;
    echo "\n";
        
    echo "$x";
    echo "\n";
        
//Las comillas ' cojo todo tal cual
    echo '$x';
$x = 7;
echo "\n";

//Devuelve el tipo
echo gettype($x);
echo "\n";

//Las constantes sin $
const x = 7;
echo "\n";

//Devuelve siempre decimales si solo quieres la parte entera hay que poner (int)
echo 7/3;
echo "\n";

//si solo quieres la parte entera hay que poner (int)
echo (int) (7/3);
echo "\n";

//Devuelve el resto
echo 7%3;
echo "\n";

//Es igual a 5x5x5
echo 5**5;

//Igual que en java

$x += 3;
$x *= 3;
echo "\n";

//Pre incremento y post incremento
$x = 9;
echo $x++;
echo "\n";
echo $x;
echo "\n";


//Concatenacion
$x="corre";
$y="caminos";
echo $x.$y;
echo "\n";
echo "Hola"."adios"; 
echo "\n";

//Comparador (devulve un booleano)
$x=3;
$y=4;
$z=3;
echo $x==$y;
echo "\n";
//Como el tipado es debil 0 es igual que false y cualquier numero diferente a 0 es true

//El === es como el de java 

// Ternario
$edad=17;
 echo ($edad>=18 ? "Mayor":"Menor");
 echo "\n";

 // LAs divisiones no son enteras, si quieres eso tendras que hacer un casting
 //round redondea
 
 //En php se pueden hacer ordenaciones pero cuidado que pepe es menor que q

 echo ("p"<"pepe" ? "true":"false");
 echo "\n";
 echo ("pepe"<"q" ? "true":"false");
 echo "\n";
 
 
 //Si a una variable le asignas otra pero con un & delante, le asigna su referencia, su posicion en memoria
 
 // funciones
 function doble($x)
 {
     $x = 2 * $x;
     return $x;
 }
 echo doble(6);
 
 // El echo se podriar hacer antes incluso de escribir el
 // function pero solo en este script en ningun otro
 
 $numero = 10;
 
 echo "\n";
 echo $numero;
 
 echo "\n";
 echo doble($numero);
 
 echo "\n";
 echo $numero;
 
 // Aqui $x vale mantiene su valor
 
 // Pero si le pones & a function doble (&$x)
 // $x se ve afectado
 
 
 //global $x hace que puedas consultar el valor de una variable
 //Que se encuentre fuera de la funcion
 
 //si en la funcion te pide un valor, por ejemplo en doble no le pasas nada
 //por ejemplo doble();
 //Puedes asignarle un valor por defecto
 
 echo "\n";
 function triple($x = 5){
     $x = 3 * $x;
     return $x;
 }
 
 echo triple(6);
 echo "\n";
 echo triple();
 
 //////////////////////////////////
 function sum(...$numeros) {
     $acc = 0;
     foreach ($numeros as $n) {
         $acc += $n;
     }
     return $acc;
 }
 
 echo sum(1, 2, 3, 4);
 

 

?>