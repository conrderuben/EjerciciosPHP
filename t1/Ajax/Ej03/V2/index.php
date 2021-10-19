<?php
include ('../bd.php');

$idioma = isset ( $_REQUEST ['idioma'] ) ? $_REQUEST ['idioma'] : 'ES';
$etiquetas = $idiomas[$idioma];

$lpalabra = $etiquetas[0];
$ltraduccion = $etiquetas[1];
$lenviar = $etiquetas[2];

// SALIDA ESTANDAR
echo <<<OUT
<head>
<meta charset="utf-8">
<script>
function cambiarIdioma() {
		document.getElementById("idFCambioIdioma").submit();
}
</script>
</head>
<body>
OUT;
echo '<form id="idFCambioIdioma" action="index.php">';
foreach ($idiomas as $k => $v){
    if($k=="$idioma"){
        echo $k;
        echo "<input type='radio' name='idioma' value='$k' checked='cheked' onChange='cambiarIdioma();'>";
    }else{
        echo $k;
        echo "<input type='radio' name='idioma' value='$k' onChange='cambiarIdioma();'>";
    }
    
}
echo '</form>';

echo <<<OUT
<hr/>
<form>
<label for="idPalabra">$lpalabra</label>
<input type="text" id="idPalabra"><br/>
		
<label for="idTraduccion">$ltraduccion</label>
<input type="text" id="idTraduccion"><br/>
		
<input type="submit" value="$lenviar">
		
</form>
</body>
OUT;
?>
