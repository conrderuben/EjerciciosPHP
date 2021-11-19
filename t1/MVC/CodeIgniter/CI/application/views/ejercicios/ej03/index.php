<?=titulo('Lista de links')?>


<ul>
<?php foreach ($pepe as $etiqueta => $url):?>
	<li>
		<?=anchor($url,$etiqueta)?>
	</li>

<?php endforeach;?>
</ul>

<form action="<?=base_url()?>">
	<input type="submit" value="Volver a home"/>
</form>