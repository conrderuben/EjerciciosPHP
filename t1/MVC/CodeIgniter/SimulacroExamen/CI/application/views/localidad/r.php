<div>
	<table>
		<tr><th>Nombre</th><th>Provincia</th></tr>
		<?php foreach ($localidades as $localidad):?>
		<tr>
		<td><?=$localidad->nombre?></td><td><?=$localidad->provincia?></td>
		</tr>
		<?php endforeach;?>
	</table>
</div>