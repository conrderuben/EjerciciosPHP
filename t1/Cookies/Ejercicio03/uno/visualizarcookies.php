<h2>Cookies del nivel 1</h2>
<table borde='1'>
	<tr>
		<th>Nombre</th>
		<th>Contenido</th>
	</tr>
<?php
foreach ($_COOKIE as $k => $v) {
    echo "<tr><td>$k</td><td>$v</td></tr>";
}

?>
</table>
<a href="../index.php">Volver</a>
