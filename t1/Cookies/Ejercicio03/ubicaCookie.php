<?php
$nombre=isset($_GET['Nombre'])?$_GET['Nombre']:null;
$contenido=isset($_GET['Contenido'])?$_GET['Contenido']:null;
$nivel=isset($_GET['Nivel'])? $_GET['Nivel']: null;
$rutaBase=	$rutaBase = pathinfo($_SERVER['REQUEST_URI'])['dirname'];
$ruta="";
if($nombre!=null || $contenido!=null || $nivel!=null){
    if($nivel==0){
        $ruta=$rutaBase."/";
    }else if($nivel==1){
        $ruta=$rutaBase."/uno/";
    }else if($nivel==2){
        $ruta=$rutaBase."/uno/dos/";
        }
    
    setcookie($nombre, $contenido,0 , $ruta );
    echo "<h3>Cookie colocada con nombre=$nombre contenido=$contenido en la ruta=$ruta</h3>";
}else{
    if($nombre==null){
        echo "<h3>Campo nombre vacio</h3>";
    }else if($contenido==null){
        echo "<h3>Campo contenido vacio</h3>";   
    }else if($nivel==null){
        echo "<h3>Campo nivel vacio</h3>";
    }
}
?>
<br><a href="index.php">Volver</a>
