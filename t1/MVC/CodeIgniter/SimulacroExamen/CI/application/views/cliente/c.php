<h1>Nuevo Cliente</h1>
<form action="<?=base_url()?>cliente/cPost" method="post">
	<label for='id-cliente'>Cliente</label><br> 
	<input id="id-cliente" name="nombre" type="text"/><br> 
	<select name='localidad'>
		<?php foreach ($localidades as $localidad):?>
		<option value="<?=$localidad->id?>"><?=$localidad->nombre?>(<?=$localidad->provincia?>)</option>
		<?php endforeach;?>
	</select>
	
	<input type="submit" value="Enviar"/>
</form>
