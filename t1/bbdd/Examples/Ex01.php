<?php
require_once '../utilBD.php';
$bd = conectarMySQL();
$sql = <<<SQL
    insert into persona(id, nombre)
    values(3,'ana')

SQL;
$bd->exec($sql);
?>