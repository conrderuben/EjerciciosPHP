<div class="container">
	<form action="<?=base_url()?>city/cPost" method="post">
		<h1>New city</h1>
		<label for="id-name">Name</label>
		<input id="id-name" type="text" name="name" autofocus="autofocus"/>
		<br/>
		Country
		<select name="idCountry">
		<?php foreach($countries as $country):?>
		<option value="<?=$country->id?>">
		<?=$country->name?>
		</option>
		<?php endforeach;?>
		</select>
		<input type="submit"/>
		
	</form>
</div>