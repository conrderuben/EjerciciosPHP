<div class="ml-3 mr-3" >
<h1 class="text-dark">Lista de personas</h1>

<form action="<?=base_url()?>persona/c">
<input type="submit" value="Nueva persona" class="btn btn-secondary"/>
</form>

<table class='table mt-3 table-striped'>
<tr>
<th class='table-dark text-light'>Nombre</th>
<th class='table-dark text-light'>Pais nacimiento</th>
<th class='table-dark text-light'>Pais residencia</th>
<th class='table-dark text-light'>Aficiones (gustan)</th>
<th class='table-dark text-light'>Aficiones (odia)</th>
<th class='table-dark text-light'>Acciones</th>
<th>
</tr>

<?php foreach ($personas as $persona):?>
		
		<tr>
			<td>
				<?=$persona->nombre?>
			</td>
			<td>
				<?=($persona->nace_id) != null ? $persona->fetchAs('pais')->nace->nombre : '' ?>
			</td>
			<td>
				<?=($persona->nace_id) != null ? $persona->fetchAs('pais')->nace->nombre : '' ?>
			</td>
			<td>
				<?php foreach ($persona->ownGustoList as $gusto):?>
					<?= $gusto->aficion_id!=NULL ? $gusto->aficion->nombre : '';?>
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach ($persona->ownOdioList as $odio):?>
					<?= $odio->aficion_id!=NULL ? $odio->aficion->nombre : '';?>
				<?php endforeach;?>
			</td>
			<td>
				
			</td>
		</tr>
		<?php endforeach;?>
	</table>
	
	<?php if(isset($mensaje)):?>
	<div class="alert alert-<?=$color?> alert-dismissible fade show" role="alert">
  <?=$mensaje?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>



</div>