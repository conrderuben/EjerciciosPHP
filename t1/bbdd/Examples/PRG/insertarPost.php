<?php 

require_once '../../utilBD.php';
$nombre = isset($_POST['nombre'])? $_POST['nombre'] : null;
$precio = isset($_POST['precio'])? $_POST['precio'] : null;

$sql = <<<SQL
    insert into producto(nombre,precio)
    values(:n,:p)
SQL;

$bd = conectarMySQL();
$sp = $bd->prepare($sql);
$sp->bindParam(':n', $nombre);
$sp->bindParam(':p', $precio);
try{
    $sp->execute();
    echo "Producto $nombre($precio) insertado";
    header("Location:insertarPostOK.php");
}
catch (Exception $e){
    header("Location:insertarPostMAL.php?msg=".$e->getMessage());
}

mostrarTablaProductos($bd);

?>
<form action="insertarGet.php"><input type="submit" value="Volver"/>
</form>