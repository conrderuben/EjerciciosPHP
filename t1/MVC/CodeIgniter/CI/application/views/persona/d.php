<div class='ml-3'>
	<h1>Borrar persona</h1>
	<h5>¿Estás seguro de querer borrar <?=$persona->nombre?>?</h5>
	
	<form action="<?=base_url()?>persona/dPost" method="post">
		<input type="hidden" name="idPersona" value="<?=$persona->id?>" />
		<input class="mb-2 btn btn-secondary" type="submit" value="Confirmar"/>
	</form>

	<form action="<?=base_url()?>persona/r" >
		<input class="mb-2 btn btn-secondary" type="submit" value="Cancelar"/>
	</form>
	
</div>