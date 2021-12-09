<div class="ml-3 mr-3" >
	<h1 class="text-dark">Lista de aficiones</h1>
	
	<form action="<?=base_url()?>aficion/c">
		<input type="submit" value="Nueva aficion" class="btn btn-secondary"/>
	</form>
	
	<table class='table mt-3 table-striped'>
		<tr>
			<th class=' table-dark bg-dark'>Nombre</th>
			<th class=' table-dark bg-dark'>Acciones</th>
		</tr>
		
		<?php foreach ($aficiones as $aficion):?>
		
		<tr>
			<td>
				<?=$aficion->nombre?>
			</td>
			<td>
				<form id="idFormU" action="<?=base_url().'aficion/u'?>" >
					<input type="hidden" name="idAficion" value="<?=$aficion->id?>" />
					<button onclick="document.getElementById('idFormU').submit()"> 
						<img height=15 width="15" src="<?=base_url().'assets/img/lapiz.png'?>">
					</button>
				</form>
				
				<form id="idFormD" action="<?=base_url().'aficion/d'?>" method="get">
					<input type="hidden" name="idAficion" value="<?=$aficion->id?>" />
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
