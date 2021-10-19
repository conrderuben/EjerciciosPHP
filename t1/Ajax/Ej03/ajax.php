<?php
include ("bd.php");
$esAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;
if ($esAjax) {
    foreach ($provincias[$_GET['ccaa']] as $v) {
        echo "<option>$v</option>";
    }
    echo "<select>";
} else {
    echo "No es una peticion AJAX";
}
?>