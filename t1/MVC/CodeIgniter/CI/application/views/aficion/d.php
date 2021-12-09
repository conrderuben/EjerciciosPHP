<div class='ml-3'>
	<h1>Borrar aficion</h1>
	<h5>¿Estás seguro de querer borrar <?=$aficion->nombre?>?</h5>
	
	<form action="<?=base_url()?>aficion/dPost" method="post">
		<input type="hidden" name="idAficion" value="<?=$aficion->id?>" />
		<input class="mb-2 btn btn-secondary" type="submit" value="Confirmar"/>
	</form>

	<form action="<?=base_url()?>aficion/r" >
		<input class="mb-2 btn btn-secondary" type="submit" value="Cancelar"/>
	</form>
	
</div>