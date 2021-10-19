<?php
include ("bd.php");
$esAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;
if ($esAjax) {
    foreach ($idiomas[$_GET['idioma']] as $k=>$v) {
        if($k==2){
            echo "<input type='button' value='$v'>";
        }else{
            echo $v;
            echo "<input type='text' name='$v'><br>" ;
        }
    }
} else {
    echo "No es una peticion AJAX";
}
?>