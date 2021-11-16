<?php
include 'saludo_model.php';
$datos['saludos']=getSaludos();
include 'helperV.php';
view('saludo',$datos);
?>