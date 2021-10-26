
<h1>Introduce otro numero</h1>
<form action="tres.php">
<input type="text" name="numero">
<input type="submit" value="Siguiente">
</form>
<?php
session_start();
$_SESSION['numero1']=$_GET['numero'];
?>
