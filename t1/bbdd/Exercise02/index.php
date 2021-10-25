<?php
include_once '../utilBD.php';
$bd = conectarMySQL();
if (isset($_GET['nombre']) && isset($_GET['precio'])){
    $sql = <<<SQL
            insert into producto(nombre, precio)
            values('{$_GET['nombre']}',{$_GET['precio']})
        SQL;
    
    $bd->exec($sql);
    
}

?>
<h1>Formulario</h1>
<form>
Introduce el nombre del producto
<input type="text" name="nombre"/><br>
Introduce el precio
<input type="text" name="precio"/><br>
<input type="submit">
</form>
<?php
$consulta='select * from producto';
$resultado=$bd->query($consulta);
   
if(! $resultado){
    echo "ERROR al ejecutar query";
    
}else{
    foreach ($resultado as $fila){
        echo 'Nombre: '. $fila['nombre'] . ' Precio: '. $fila['precio'] . '<br>';
    }
}
    
?>