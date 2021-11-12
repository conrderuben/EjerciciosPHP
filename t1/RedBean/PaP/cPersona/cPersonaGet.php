<?php 
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
$aficiones = R::findAll('aficion');
?>
<h1>Nueva persona</h1>

<form action="../rPersona/rPersonaGet.php">
<input type="submit" value="Volver"/>
</form>

<form action="cPersonaPost.php" method="post">
	Nombre
	<input type="text" name="nombre" required="required"/>
	<br/>
	
	País nacimiento
	<select name="idPaisN">
	<!--  <select name="nombrePais"> -->
		<?php foreach ($paises as $pais):?>
		
		<option value="<?= $pais->id?>">
		<!--  <option value="<?= $pais->nombre?>"> -->
			<?= $pais->nombre?>
			
		</option>
		
		<?php endforeach;?>
	</select>
	
	País residencia
	<select name="idPaisV">
	<!--  <select name="nombrePais"> -->
		<?php foreach ($paises as $pais):?>
		
		<option value="<?= $pais->id?>">
		<!--  <option value="<?= $pais->nombre?>"> -->
			<?= $pais->nombre?>
			
		</option>
		
		<?php endforeach;?>
	</select>
	
	<fieldset>
	<legend>Aficiones que me gustan</legend>
		<?php foreach ($aficiones as $aficion):?>
		
			<input id="idg-<?=$aficion->id?>" type="checkbox" name="idAficionesGusta[]" value="<?=$aficion->id?>"/>
			<label for="idg-<?=$aficion->id?>"><?=$aficion->nombre?></label>
		
		<?php endforeach;?>
	</fieldset>

	<fieldset>
	<legend>Aficiones que aborrezco</legend>
		<?php foreach ($aficiones as $aficion):?>
		
			<input id="ido-<?=$aficion->id?>" type="checkbox" name="idAficionesOdio[]" value="<?=$aficion->id?>"/>
			<label for="ido-<?=$aficion->id?>"><?=$aficion->nombre?></label>
		
		<?php endforeach;?>
	</fieldset>


	
	<br/>
	<input type="submit"/>
</form>