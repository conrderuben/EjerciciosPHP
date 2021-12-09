<div class='ml-3'>
	<h1>Borrar país</h1>
	<h5>¿Estás seguro de querer borrar <?=$pais->nombre?>?</h5>
	
	<form action="<?=base_url()?>pais/dPost" method="post">
		<input type="hidden" name="idPais" value="<?=$pais->id?>" />
		<input class="mb-2 btn btn-secondary" type="submit" value="Confirmar"/>
	</form>

	<form action="<?=base_url()?>pais/r" >
		<input class="mb-2 btn btn-secondary" type="submit" value="Cancelar"/>
	</form>
	
</div>