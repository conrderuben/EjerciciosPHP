<?php
$var = "perro";
$frase="Hola que tal estas";
$array=["hola", "que", "tal"];
//TODO






// Para no tener que hacer varios echo
echo <<<RUBEN
<body>
<h1>Cabecera</h1>
<p></p>
</body>
RUBEN;
//Si pones 'RUBEN' escribiria $var tal cual y no su valor
echo "\n";
echo strlen($var);//Devuelve el numero de caracteres
echo "\n";
echo substr($var, 1, 2);// Devuleve de la variable desde la posicion 1 los 2 siguientes caracteres
echo"\n";
 //ltrm($c), rtrim($c), trim($c) quita $c por izquierda derecha o de todo
 explode(' ', $frase); // Crea un array separado por ' '.
 $i=1;
 foreach (explode(' ', $frase) as $palabra) {
     echo "$i: $palabra\n";
     $i++;
 }
  echo implode(' ', $array);//Incluye el array en un solo string







?>