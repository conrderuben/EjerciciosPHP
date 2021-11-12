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
		<th>País de residencia</th>	
		<th>Aficiones que gustan</th>
		<th>Aficiones que no gustan</th>	
	</tr>

	<?php foreach ($personas as $persona):?>
		<tr>
			<td>
				<?=$persona->nombre?>
			</td>
			
			<td> 
				<?=$persona->fetchAs('pais')->nace->nombre?>
			</td>

			<td> 
				<?=$persona->fetchAs('pais')->vive->nombre?>
			</td>
			
			<td>
				<?php foreach ($persona->sharedGustaList as $gusta):?>
					<?=$gusta->persona->nombre?> 
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach ($persona->sharedOdioList as $odio):?>
					<?=$odio->persona->nombre?> 
				<?php endforeach;?>
			</td>
			
		</tr>
	
	<?php endforeach;?>
	
</table>