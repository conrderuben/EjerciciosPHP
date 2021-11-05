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

function insertar()
{
    $p = R::dispense('persona');
    $p->nombre = 'Pepe';
    $p->apellido = 'Garay';
    // $p['tlf']='320940222'; TAMBIEN SE PUEDE COLOCAR ASI.
    // $p->tlf = '982348322'; SI AÑADIMOS ALGO MAS A LA CLASE LOS ANTERIORES SE LO AÑADE COMO NULL
    $P->fecha = '2021-11-24'; // RECONOCE EL TIPO DATE SI PONES LA FECHA EN ESE FORMATO
}

function recuperar()
{
    $p = R::load('persona', 4);
    echo $p->nombre . PHP_EOL;
    echo $p->apellido . PHP_EOL;
    echo $p->tl . PHP_EOL;

    // COMO HE HECHO UN LOAD SABE EL ID Y EN VEZ DE UN INSERT HACE UN UPDATE
    $p->tlf = '874922011';
    R::store($p);
}

function borrar()
{
    // ELIMINA EL BEAN QUE TIENE ID 4
    $p = R::load('persona', 4);
    R::trash($p);
}

function recuperarTodo()
{
    $personas = R::findAll('persona');
    foreach ($personas as $persona) {
        echo 'NOMBRE: ' . $persona['nombre'] . PHP_EOL;
        echo 'APELLIDO: ' . $persona['apellido'] . PHP_EOL;
        echo '=====================\n';
    }
}

function recuperarPorFiltro($appellido)
{
    // $personas = R::find('persona', "apellido='$apellido'"); POCO SEGURO POR LA INYECCION DE SQL
    $personas = R::find('persona', "apellido=?", [
        $apellido
    ]);
    // $personas = R::find('persona', "apellido=:nom and apellido=:ape",[':nom'=>$nombre,':ape'=>$apellido]); TMB SE ÙEDE HACER ASI
    foreach ($personas as $persona) {
        echo 'NOMBRE: ' . $persona['nombre'] . PHP_EOL;
        echo 'APELLIDO: ' . $persona['apellido'] . PHP_EOL;
        echo '=====================\n';
    }
}

function recuperarConAgregacion()
{
    $sql = <<<SQL
        select count(*) as nump
        from persona
        where apellido is not null
    SQL;
    $filas = R::getAll($sql);
    foreach ($filas as $fila) {
        echo $fila->nump . PHP_EOL;
    }
    // $resultado=R::getAll($sql); echo $resutlado; DE ESTA MANERA SOLO ME DEVUELVE UNA CELDA (SOLO USAR SI SE QUE VA A SALIR SOLO UNA)
}
conectar();
echo 'CONECTADO' . PHP_EOL;
insertar();
recuperar();

R::store($p);

desconectar();
echo 'DESCONECTADO' . PHP_EOL;
?>