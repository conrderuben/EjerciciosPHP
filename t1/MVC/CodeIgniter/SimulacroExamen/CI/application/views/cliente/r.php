<div>
	<table>
		<tr><th>Nombre</th><th>¿Madrileño?</th></tr>
		<?php foreach ($clientes as $cliente):?>
		<tr>
		<td><?=$cliente->nombre?></td><td><?=$cliente->fetchAs('localidad')->localidad->provincia == 'Madrid' ? 'Si' : 'No'?></td>
		</tr>
		<?php endforeach;?>
	</table>
</div>