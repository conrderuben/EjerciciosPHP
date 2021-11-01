<?php
require_once '../../utilBD.php';

function mostrarTablaProductos($bd){
    $sql = <<<SQL
    select nombre,precio
    from producto
SQL;
    $filas = $bd->query($sql);
    echo '<table><tr><th>Nombre</th><th>Precio</th></tr>';
    foreach($filas as $f){
        echo '<tr>';
        echo "<td>{$f['nombre']}</td>";
        echo "<td>{$f['precio']}</td>";
    }
    echo "</table>";
}
$bd = conectarMySQL();
mostrarTablaProductos($bd);
echo '<form action="insertarGet.php"><input type="submit" value="Volver"/>
</form>';
?>