<div class="container">
	<form action="<?=base_url()?>user/registerPost" method="post">
		<h1>Register travel</h1>

		<label for="id-dni">Dni</label>
		<input id="id-dni" type="text" name="dni" value="<?=$persona->nombre?>" />
		<br/>
		
		Travel
	    <?php foreach ($cities as $city):?>
	    <input type="checkbox" id="id-<?=$city->id?>" name="idCityTravel[]" value="<?=$city->id?>">
	    <label for="id-<?=$city->id?>" ><?=$city->name?></label>
	    <?php endforeach;?>
		<br/>
		
		
		
		<input type="hidden" name="idPersona" value="<?=$persona->id?>" />
		
		<input type="submit"/>
		
	</form>
</div>