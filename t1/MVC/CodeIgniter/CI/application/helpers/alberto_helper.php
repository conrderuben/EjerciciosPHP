<?php
function titulo($texto) {
    $html='';
    for ($i=5;$i>=1;$i--) {
        $html.="<h$i>$texto</h$i>";
    }
   return  $html;
}
?>