<div class="container">
	<h1>Lista de personas</h1>
	
	<form action="<?=base_url()?>persona/c">
		<input type="submit" value="Nueva persona" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Dni</th>
			<th>Name</th>
			<th>City (born)</th>
				<th>City (travel)</th>
			
		</tr>
		
		<?php foreach ($users as $user):?>
			<tr>
			
				<td>
					<?=$user->dni?>
				</td>
				
				<td>
					<?=$user->name?>
				</td>
				
				<td>
					<?=($user->born_id) != null ? $user->fetchAs('city')->in->name: '' ?>
				</td>
				
				<td>
					<?php foreach ($user->ownTravelList as $travel):?>
						<?=$travel->city_id!=null ? $travel->city->name: ''?> 
					<?php endforeach;?>
				</td>
				
				
			</tr>
		<?php endforeach;?>
	</table>

</div>