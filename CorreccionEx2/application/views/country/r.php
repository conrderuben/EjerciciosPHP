<?php 
function numCities($country){
    $num=0;
    foreach ($country->alias('in')->ownCityList as $city){
        $num++;
    }
return $num;
}

?>
<div class="container">
	<h1>Countries</h1>
	
	<form action="<?=base_url()?>country/c">
		<input type="submit" value="New country" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Name</th>
			<th># cities</th>
		</tr>
		
		<?php foreach ($countries as $country):?>
		
		<tr>
			<td>
				<?=$country->name?>
			</td>
			<td>
			<?=numCities($country)?>
			</td>
		</tr>
		<?php endforeach;?>
	</table>

</div>