<form>
<input type="text" name="texto">
<select name="select">
	<option>black</option>
	<option>blue</option>
	<option>green</option>
	<option>red</option>	
</select>
Subrayada<input type="checkbox" name="sub" value="true">
Negrita<input type="checkbox" name="neg" value="true">
<input type="submit" value="Enviar">
</form>
<?php
$texto=isset($_GET['texto'])?$_GET['texto']:null;
$sub=isset($_GET['sub'])?$_GET['sub']:null;
$neg=isset($_GET['neg'])?$_GET['neg']:null;
$color=isset($_GET['select'])?$_GET['select']:null;
if($texto!=null){
    if($color!=null){
        $f=fopen("articulo.txt", "a");
        fputs($f," <span style='color: $color;'>");
        fclose($f);
    }else{
        $f=fopen("articulo.txt", "a");
        fputs($f," <pre>");
        fclose($f);
    }
    
    if($sub!=null && $neg!=null){
        $f=fopen("articulo.txt", "a");
        fputs($f," <b><u>".$_GET['texto']."</u></b>");
        fclose($f);
        $f=fopen("articulo.txt", "r");
        
        //echo file_get_contents("articulo.txt"); Otra forma
        while(!feof($f)){
            echo fgets($f);
        }
        fclose($f);
    }else if($sub==null && $neg=="true"){
        $f=fopen("articulo.txt", "a");
        fputs($f," <b>".$_GET['texto']."</b>");
        fclose($f);
        $f=fopen("articulo.txt", "r");
        
        //echo file_get_contents("articulo.txt"); Otra forma
        while(!feof($f)){
            echo fgets($f);
        }
        fclose($f);
    }else if($sub=="true" && $neg==null){ 
        $f=fopen("articulo.txt", "a");
        fputs($f," <u>".$_GET['texto']."</u>");
        fclose($f);
        $f=fopen("articulo.txt", "r");
        
        //echo file_get_contents("articulo.txt"); Otra forma
        while(!feof($f)){
            echo fgets($f);
        }
        fclose($f);
    }
    $f=fopen("articulo.txt", "a");
    fputs($f," </span>");
    fclose($f);
    
}
?>