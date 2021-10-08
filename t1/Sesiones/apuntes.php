<?php
session_start();
//Crea un fichero vacio en tmp de xampp vacio
//$_SESSION['visitas'] = 1;//Añade al fichero de sesion un un elemento 'visitas' y un contenido (1)
//Cuando hagas otro igual que este, se sobre escribe, no se destruye
//unset($_SESSION['visitas']);//Lo elimina

if(isset($_SESSION['visitas'])){
    $_SESSION['visitas']++;
}else{
    $_SESSION['visitas'] = 1;
}

//session_destroy();-->Destruye la sesion actual
//header('Location:index.php');-->Me redirecciona a index
?>
<h1>Bienvenido</h1>
<h3>Es tu visita número <?=$_SESSION['visitas']?></h3>

