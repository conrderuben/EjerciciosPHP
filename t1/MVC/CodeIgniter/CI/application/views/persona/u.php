<div class='ml-3'>
	<form action="<?=base_url()?>persona/uPost" method="post">
		<h1>Modifica Persona</h1>
		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre" value="<?=$persona->nombre?>"/>
		<br/>
		<label for="id-paisN">Pais de nacimiento</label>
		<select name="paisN" id="id-paisN">
			<?php foreach ($paises as $pais):?>
			<option value="<?=$pais->id ?>" <?= $pais->id == $persona->fetchAs('pais')->nace->id ? 'selected' : ''  ?>>
				<?=$pais->nombre?>
			</option>
			<?php endforeach;?>
		</select>
		<br/>
		<label for="id-paisV">Pais de residencia</label>
		<select name="paisV" id="id-paisV">
			<?php foreach ($paises as $pais):?>
			
			<option value="<?=$pais->id ?>" <?= $pais->id == $persona->fetchAs('pais')->vive->id ? 'selected' : ''  ?>>
				<?=$pais->nombre?>
			</option>
			<?php endforeach;?>
		</select>

		<h3>Aficiones que le gustan</h3>
		<?php $idAficionesGusta=[]; foreach($persona->ownGustoList as $gusto){$idAficionesGusta[] = $gusto->aficion_id;}?>
			<?php foreach ($aficiones as $aficion): ?>
    			<input id ="idg-<?=$aficion->id?>" type="checkbox" value="<?=$aficion->id?>" name="idAficionGusta[]"
    			<?= in_array($aficion->id, $idAficionesGusta)?'checked':''?>/>
    			
    			<label for="idg-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
			    		
    		<?php endforeach;?>
		<h3>Aficiones que odia</h3>
		<?php $idAficionesOdio=[]; foreach($persona->ownOdioList as $odio){$idAficionesOdio[] = $odio->aficion_id;}?>
		
			<?php foreach ($aficiones as $aficion): ?>
    			<input id ="idg-<?=$aficion->id?>" type="checkbox" value="<?=$aficion->id?>" name="idAficionOdia[]"
    			<?= in_array($aficion->id, $idAficionesOdio)?'checked':''?>/>
    			<label for="idg-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
			    		
    		<?php endforeach;?>
    		<br>
		
		<input type='hidden' name="idPersona" value="<?=$persona->id?>"/>
		<input class="btn btn-secondary" type="submit" value='enviar'/>
		
	</form>
</div>