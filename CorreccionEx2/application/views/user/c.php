
<div class="container">
	<form id="id-form" action="<?=base_url()?>user/cPost" method="post">
		
		<h1>New user</h1>
		
		
		<label for="id-dni">Dni</label>
		<input id="id-dni" type="text" name="dni" />
		<br/>
		
		<label for="id-name">Name</label>
		<input id="id-name" type="text" name="name" autofocus="autofocus"/>
		<br/>
	
		
		
		Born
		<select name="idBorn">
			<?php foreach ($cities as $city):?>
			<option value="<?=$city->id ?>">
				<?=$city->name?>
			</option>
			<?php endforeach;?>
		</select>
		<br/>
		
	


		<input type="submit"/>
		<br/>
	</form>
</div>