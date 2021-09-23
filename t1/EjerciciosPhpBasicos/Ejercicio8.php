<?php

//Operadores
const sPm = 60;			// 60
const sPh = 3600; 		// 60 x 60
const sPd = 86400; 		// 3600 x 24
const sPmes = 2592000;	// 86400 x 30
const sPa = 31536000;	// 86400 x 365

echo "Introduce el dia ";
fscanf(STDIN, "%d\n", $dia);

echo "\n";

echo "Introduce el mes: ";
fscanf(STDIN, "%d\n", $mes);

echo "\n";

echo "Introduce el año: ";
fscanf(STDIN, "%d\n", $año);

$tiempo=time()-strtotime("$dia-$mes-$año");

$añosT=(int)($tiempo/sPa);
$tiempo=$tiempo%sPa;
$mesesT=(int)($tiempo/sPmes);
$tiempo=$tiempo%sPmes;
$diasT=(int)($tiempo/sPd);
$tiempo=$tiempo%sPd;
$horasT=(int)($tiempo/sPh);
$tiempo=$tiempo%sPh;
$minutosT=(int)($tiempo/sPm);
$tiempo=$tiempo%sPm;

echo "Han transcurrido desde el $dia/$mes/$año.
$añosT años, $mesesT meses, $diasT días, $horasT horas, $minutosT minutos y $tiempo segundos";






?>