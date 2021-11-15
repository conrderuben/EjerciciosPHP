<?php 
    require_once '../bd/bdh.php';
    conectar();
    //$personasMal = R::findAll('persona');
    $personas = R::find('persona','nace_id is null');
    desconectar();
?>
<h1>Nuevo país</h1>

<form action="../rPais/rPaisGet.php">
<input type="submit" value="Volver"/>
</form>

<form action="cPaisPost.php" method="post">
	Nombre
	<input type="text" name="nombre" required="required"/>
	<br/>
	
	<fieldset>
	<legend>
	Lista de ciudadanos potenciales
	</legend>
	<?php foreach ($personas as $persona):?>
		<!-- <?php //if ($persona->nace_id==null):?> -->
		<input id="id-<?=$persona->id?>" type="checkbox" value="<?=$persona->id?>" name="idPersona[]"/>
		<label for="id-<?=$persona->id?>" ><?=$persona->nombre?> </label>
		<!-- <?php //endif;?> -->
	<?php endforeach;?>
	</fieldset>
	
	<input type="submit"/>
</form>