<?php 
session_start();
echo "<h1>ESCRIBIR</h1>";
echo "
<form action='listaUsuarios.php'>
De:<input type='text' name='de' value='{$_SESSION['bd']['_activo']}'><br>
Para:<input type='text' name='para' value='{$_GET['para']}' ><br>
Escribe el contenido del mensaje<br>
<textarea name='textarea' rows='4' cols='50'>
</textarea><br>
<input type='submit' value='Enviar'>
<form>
";

?>