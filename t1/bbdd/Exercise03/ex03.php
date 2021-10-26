<?php
include_once '../utilBD.php';
session_start();
$bd = conectarMySQL();
if(isset($_GET['accion']) && $_GET['accion']=='preparar'){
if (isset($_GET['nombre']) && isset($_GET['precio'])){
    $_SESSION['preparados'][]=[$_GET['nombre'],$_GET['precio']];
}
}else if(isset($_GET['accion']) && $_GET['accion']=='insertar'){
    $consulta = <<<SQL
    insert into PRODUCTO(nombre,precio)
    values (:nombre,:precio)
SQL;
    foreach ($_SESSION['preparados'] as $producto ) {
        $nombre = $producto [0];
        $precio = $producto [1];
        $resultado->bindParam ( ':nombre', $nombre );
        $resultado->bindParam ( ':precio', $precio );
        try {
            $resultado->execute ();
        } catch ( PDOException $e ) {
            echo "<h4>ERROR al INSERTAR</h4> <p>$e</p>";
        }
}
}else{
    echo "problema";
}
?>
<h1>Formulario</h1>
<form >
Introduce el nombre del producto
<input type="text" name="nombre"/><br>
Introduce el precio
<input type="text" name="precio"/><br>
<input type="submit" name="accion" value="preparar">
<input type="submit" name="accion" value="insertar">
</form>


<h1>Insertados</h1>
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
<h1>Preparados</h1>
<?php 
if(isset($_SESSION['preparados'])){
    foreach ($_SESSION['preparados'] as $fila){
        echo 'Nombre: '. $fila[0] . ' Precio: '. $fila[1] . '<br>';
}
}
?>