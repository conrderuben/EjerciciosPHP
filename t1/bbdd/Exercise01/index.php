<?php
include_once '../utilBD.php';
$bd = conectarMySQL();
$array=[['cocacola', 1.2],['mejillones', 3.23],['abrelatas', 4.34]];

function insertar($array, $bd){
    foreach ($array as $k=>$v){
        $sql= <<<SQL
            insert into producto(nombre, precio)
            values('{$v[0]}', {$v[1]})
        SQL;
        $bd->exec($sql);
        echo "insertado {$v[0]}- {$v[1]}  ";
    }
}
insertar ($array, $bd);
?>