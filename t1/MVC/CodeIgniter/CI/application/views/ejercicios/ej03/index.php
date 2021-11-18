<h1>Lista de links</h1>

<ul>
<?php foreach ($links as $etiqueta => $url):?>
	<li>
		<a href="<?=$url?>"><?=$etiqueta?></a>
	</li>

<?php endforeach;?>
</ul>
<form action="<?=base_url()?>">
	<input type="submit" value="Volver a home"/>
</form>