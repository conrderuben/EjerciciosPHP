<div class="ml-3 mr-3" >
	<h1 class="text-dark">Lista de países</h1>
	
	<form action="<?=base_url()?>pais/c">
		<input type="submit" value="Nuevo país" class="btn btn-secondary"/>
	</form>
	
	<table class='table mt-3 table-striped'>
		<tr>
			<th class='table-dark text-light'>Nombre</th>
			<th class='table-dark text-light'>Acciones</th>
		</tr>
		
		<?php foreach ($paises as $pais):?>
		
		<tr>
			<td>
				<?=$pais->nombre?>
			</td>
			<td>
				<form id="idFormU" action="<?=base_url().'pais/u'?>" >
					<input type="hidden" name="idPais" value="<?=$pais->id?>" />
					<button onclick="document.getElementById('idFormU').submit()"> 
						<img height=15 width="15" src="<?=base_url().'assets/img/lapiz.png'?>">
					</button>
				</form>
				
				<form id="idFormD" action="<?=base_url().'pais/d'?>" method="get">
					<input type="hidden" name="idPais" value="<?=$pais->id?>" />
					<button onclick="document.getElementById('idFormD').submit()"> 
						<img height=15 width="15" src="<?=base_url().'assets/img/basura.png'?>">
					</button>
				</form>
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

