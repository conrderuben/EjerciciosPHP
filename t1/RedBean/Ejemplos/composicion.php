<?php
function conectar()
{
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar()
{
    R::close();
}

conectar();

//RELACIONES MUCHOS A UNO
$c=R::dispense('colegio');
$c->nombre='IES Rey Fernando VI';
R::store($c);

$a=R::dispense('alumno');
$a->nombre='Peepe';
$a->colegio=$c;
R::store($a);


//RELACIONES DE UNO A MUCHOS
$a=R::dispense('alumno');
$a->nombre='Peepe';
R::store($a);

$c=R::dispense('colegio');
$c->nombre='IES Rey Fernando VI';
$c->ownAlumnoList[]=$a;//Consiste en añadir el alumno $a a la coleccion de alunmos del colegio
R::store($c);
foreach ($c->ownAlumnoList as $a){
    echo $a;
}
