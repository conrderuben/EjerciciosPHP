<div class="container">
	<h1>Cities</h1>
	
	<form action="<?=base_url()?>city/c">
		<input type="submit" value="New city" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>Country</th>
		</tr>
		
		<?php foreach ($cities as $city):?>
		
		<tr>
			<td>
				<?=$city->name?>
			</td>
			<td>
			<?=$city->fetchAs('country')->in->name?>
			</td>
		</tr>
		<?php endforeach;?>
	</table>

</div>