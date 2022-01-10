<div class="container">
	<form action="<?=base_url()?>country/cPost" method="post">
		<h1>New country</h1>
		<label for="id-name">Name</label>
		<input id="id-name" type="text" name="name" autofocus="autofocus"/>
		<br/>
		
		<input type="submit"/>
		
	</form>
	<form action="<?=base_url()?>country/r" ><button>Cancelar</button></form>
</div>