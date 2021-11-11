<?php 
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
$aficiones = R::findAll('aficion');
?>
<h1>Nueva persona</h1>
<form action="cPersonaPost.php" method="post">
	Nombre
	<input type="text" name="nombre" required="required"/>
	<br/>
	
	País
	<select name="idPais">
	<!--  <select name="nombrePais"> -->
		<?php foreach ($paises as $pais):?>
		
		<option value="<?= $pais->id?>">
		<!--  <option value="<?= $pais->nombre?>"> -->
			<?= $pais->nombre?>
			
		</option>
		
		<?php endforeach;?>
	</select>
	
	<fieldset>
	<legend>Aficiones</legend>
		<?php foreach ($aficiones as $aficion):?>
		
			<input id="id-<?=$aficion->id?>" type="checkbox" name="idAficiones[]" value="<?=$aficion->id?>"/>
			<label for="id-<?=$aficion->id?>"><?=$aficion->nombre?></label>
		
		<?php endforeach;?>
	</fieldset>
	
	<br/>
	<input type="submit"/>
</form>