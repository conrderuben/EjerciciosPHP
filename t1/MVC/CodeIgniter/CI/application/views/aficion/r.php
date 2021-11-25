<div class="ml-3 mr-3" >
	<h1 class="text-dark">Lista de aficiones</h1>
	
	<form action="<?=base_url()?>aficion/c">
		<input type="submit" value="Nueva aficion" class="btn btn-secondary"/>
	</form>
	
	<table class='table mt-3 table-striped'>
		<tr>
			<th class=' table-dark bg-dark'>Nombre</th>
		</tr>
		
		<?php foreach ($aficiones as $aficion):?>
		
		<tr>
			<td>
				<?=$aficion->nombre?>
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
