<?php
$ruben = isset($_COOKIE['Ruben']) ? $_COOKIE['Ruben'] : 'NO EXISTE';
$peligro = isset($_COOKIE['Peligro']) ? $_COOKIE['Peligro'] : 'NO EXISTE';

setcookie("Ruben", "Te la he colao");
setcookie("Peligro", "Estas expuesto");
?>

<h1>Hola desde el servidor</h1>
<ul>
	<li>Cookie ruben: <?=$ruben?></li>
	<li>Cookie peligro: <?=$peligro?></li>
	
	
</ul>