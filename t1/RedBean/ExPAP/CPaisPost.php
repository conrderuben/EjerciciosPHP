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
function insertar($pais)
{
    $p = R::dispense('pais');
    $p->nombre = $pais;
    R::store($p);
}

$pais=isset($_POST['pais'])?$_POST['pais']:null;

conectar();
try{
    insertar($pais);
    header("Location:insertarPostOK.php");
}
catch (Exception $e){
    header("Location:insertarPostMAL.php");
}

deconectar();



?>



