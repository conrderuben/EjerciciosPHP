<div class="ml-3 mr-3" >
	<h1 class="text-dark">Lista de países</h1>
	
	<form action="<?=base_url()?>pais/c">
		<input type="submit" value="Nuevo país" class="btn btn-secondary"/>
	</form>
	
	<table class='table mt-3 table-striped'>
		<tr>
			<th class='table-dark text-light'>Nombre</th>
		</tr>
		
		<?php foreach ($paises as $pais):?>
		
		<tr>
			<td>
				<?=$pais->nombre?>
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

