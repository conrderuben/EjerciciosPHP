<?php 
function conectar()
{
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar()
{
    R::close();
}
conectar();
$paises=R::findAll('pais');
desconectar();
?>

<h1>Lista de países</h1>
<table border="1">
	<tr>
		<th>Nombre</th>
	</tr>
	
	<?php foreach($paises as $pais):?>
		<tr>
			<td>
				<?=$pais->nombre?>
			</td>
		</tr>
		
		
	<?php endforeach;?>

</table>
<a href="menu.php">Volver al menu</a>

