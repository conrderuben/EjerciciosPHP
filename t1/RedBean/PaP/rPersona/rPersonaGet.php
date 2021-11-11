<?php 
require_once '../bd/bdh.php';
conectar();
$personas=R::findAll('persona');
desconectar();
?>
<h1>Lista de personas</h1>

<form action="../cPersona/cPersonaGet.php">
	<input type="submit" value="Nueva persona"/>
</form>
<form action="../">
	<input type="submit" value="Volver"/>
</form>

<table border="1">
	<tr> 
		<th>Nombre </th>	
		<th>País de nacimiento</th>	
		<th>Aficiones</th>	
	</tr>

	<?php foreach ($personas as $persona):?>
		<tr>
			<td>
				<?=$persona->nombre?>
			</td>
			<td> 
				<?=$persona->pais->nombre?>
			</td>
			<td>
				<?php foreach ($persona->sharedAficionList as $aficion):?>
					<?=$aficion->nombre?> 
				<?php endforeach;?>
			</td>
		</tr>
	
	<?php endforeach;?>
	
</table>