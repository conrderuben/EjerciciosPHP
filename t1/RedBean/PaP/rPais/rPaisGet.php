<?php 
require_once '../bd/bdh.php';
conectar();
$paises=R::findAll('pais');
desconectar();
?>
<h1>Lista de países</h1>

<form action="../cPais/cPaisGet.php">
	<input type="submit" value="Nuevo país"/>
</form>

<form action="../">
	<input type="submit" value="Volver"/>
</form>

<table border="1">
	<tr> 
		<th>Nombre </th>	
		<th>Ciudadanos </th>	
	</tr>

	<?php foreach ($paises as $pais):?>
		<tr>
			<td>
				<?=$pais->nombre?>
			</td>
			<td> 
				<?php foreach ($pais->ownPersonaList as $persona):?>
					<?=$persona->nombre?> 
				<?php endforeach;?>
			</td>
		</tr>
	
	<?php endforeach;?>
	
</table>