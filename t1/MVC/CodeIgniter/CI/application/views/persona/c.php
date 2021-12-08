<div class='ml-3'>
	<form action="<?=base_url()?>persona/cPost" method="post">
		<h1>Nueva persona</h1>
		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre"/>
		<br/>
		<label for="id-paisN">Pais de nacimiento</label>
		<select name="paisN" id="id-paisN">
			<?php foreach ($paises as $pais):?>
			<option value="<?=$pais->id ?>">
				<?=$pais->nombre?>
			</option>
			<?php endforeach;?>
		</select>
		<br/>
		<label for="id-paisV">Pais de residencia</label>
		<select name="paisV" id="id-paisV">
			<?php foreach ($paises as $pais):?>
			<?php $v = $pais->id?>
			<option value="<?=$pais->id ?>">
				<?=$pais->nombre?>
			</option>
			<?php endforeach;?>
		</select>
		<?= $v?>
		<h3>Aficiones que le gustan</h3>
			<?php foreach ($aficiones as $aficion): ?>
    			<input id ="idg-<?=$aficion->id?>" type="checkbox" value="<?=$aficion->id?>" name="idAficionGusta[]"/>
    			<label for="idg-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
			    		
    		<?php endforeach;?>
		<h3>Aficiones que odia</h3>
			<?php foreach ($aficiones as $aficion): ?>
    			<input id ="idg-<?=$aficion->id?>" type="checkbox" value="<?=$aficion->id?>" name="idAficionOdia[]"/>
    			<label for="idg-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
			    		
    		<?php endforeach;?>
    		<br>
		
		
		<input type="submit" value='enviar'/>
		
	</form>
</div>