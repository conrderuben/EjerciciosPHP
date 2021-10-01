<!-- para un grupo de botones de radio, que compartan el atributo name con el valor indicado en $nombre y que tenga cada uno un “value” correspondiente a las claves del array asociativo $arrayValueLabel y una etiqueta correspondiente al valor del array asociativo $arrayValueLabel. Opcionalmente puede tener un parámetro “seleccionado” que indicaría (en términos del value) qué radio button está seleccionado por defecto (podría no haber ninguno)
 -->
<?php
function resaltar($texto){
    return "<h1>$texto</h1>";
}
function pintarRadio($nombre,$arrayValueLabel,$seleccionado){
$texto='';


foreach ($arrayValueLabel as $value => $label){
    $seleccionar=($value==$seleccionado)?'checked="checked"':'';
    $texto.= <<<HTML
    
    <input type="radio" name="$nombre" value="$value" id="$value" $seleccionar>
    <label for="$value">$label</label><br />


HTML;
}
   return $texto ;
}

////////////////////////////////////////////////////

function pintarCheckboxes($nombre,$arrayValueLabel,$seleccionado){
    $texto='';
    
    
    foreach ($arrayValueLabel as $value => $label){
        $seleccionar=(in_array($value, $seleccionado))?'checked="checked"':'';
        $texto.= <<<HTML
        
    <input type="checkbox" name="{$nombre}[]" value="$value" id="$value" $seleccionar>
    <label for="$value">$label</label><br />
    
    
HTML;
    }
    return $texto ;
}

///////////////////////////////////////////////////////

function pintarSelect(){
    
}
?>