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
function insertar($persona, $pais)
{
    $p = R::dispense('persona');
    $p->nombre = $persona;
    $p->pais=$pais;
    R::store($p);
}

$pais=isset($_POST['pais'])?$_POST['pais']:null;
$persona=isset($_POST['persona'])?$_POST['persona']:null;

conectar();
try{
    insertar($persona, $pais);
    header("Location:insertarPostOK.php");
}
catch (Exception $e){
    header("Location:insertarPostMAL.php");
}

deconectar();



?>