<form>
<input type="text" name="texto">
<input type="submit" value="Enviar">
</form>
<?php
if(isset($_GET['texto'])){
    $f=fopen("articulo.txt", "a");
    fputs($f," <b><u>".$_GET['texto']."</u></b>");
    fclose($f);
    $f=fopen("articulo.txt", "r");
    
    //echo file_get_contents("articulo.txt"); Otra forma
    while(!feof($f)){
        echo fgets($f);
    }
    fclose($f);
}
?>