<div class='ml-3'>
<form action="<?=base_url()?>aficion/uPost" method="post">

<h1>Cambia la aficion</h1>
<label for="id-nombre">Nombre</label>
<input id="id-nombre" type="text" name="nombre" value="<?=$aficion->nombre?>"/>

<input id="idAficion" type="hidden" name="idAficion" value="<?=$aficion->id?>"/>
<br/>
<input type="submit"/>

</form>
</div>
