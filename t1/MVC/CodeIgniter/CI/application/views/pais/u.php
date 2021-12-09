<div class='ml-3'>
<form action="<?=base_url()?>pais/uPost" method="post">

<h1>Cambia el pais</h1>
<label for="id-nombre">Nombre</label>
<input id="id-nombre" type="text" name="nombre" value="<?=$pais->nombre?>"/>

<input id="idPais" type="hidden" name="idPais" value="<?=$pais->id?>"/>
<br/>
<input type="submit"/>

</form>
</div>
