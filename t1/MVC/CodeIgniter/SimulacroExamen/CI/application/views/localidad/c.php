<h1>Nueva Localidad</h1>
<form action="<?=base_url()?>localidad/cPost" method="post">
	<label for='id-localidad'>Localidad</label><br> 
	<input id="id-localidad" type="text" name="nombre"/><br> 
	<select name="Provincia">
	<option>Madrid</option>
	<option>Segovia</option>
	<option>Zaragoza</option>
	<option>Badajoz</option>
	</select>
	<input type="submit" value="Enviar"/>
</form>
