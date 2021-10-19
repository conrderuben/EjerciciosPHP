<?php
include ("bd.php");
$esAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;
if ($esAjax) {
    echo "<laber for='provincias'>provincias</label>";
    echo "<select id='provincias'>";

    foreach ($provincias[$_GET['ccaa']] as $v) {
        echo "<option>$v</option>";
    }
    echo "<select>";
} else {
    echo "No es una peticion AJAX";
}
?>