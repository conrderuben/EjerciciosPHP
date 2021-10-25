<head>
	<script>
	function f() {
		var xmlhttp = new XMLHttpRequest();
		//Abre la conexion
		xmlhttp.open("GET","ajax.php?filtro=" + document.getElementById('idFiltro').value&texto=" + document.getElementById('idTexto').value,true);
		//true hace que sea asincrona
		//ajax.php es donde se conecta
		xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		//cabecera para asegurarse de que es una conexion ajax
		//Para post se envian los valores por el send(si son varios con un & entre ellos)
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//Esta cabecera cuando sea POST
		xmlhttp.send();
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("idLista").innerHTML= xmlhttp.responseText;
			}
		}
	}
</script>
</head>

<body onload="peticionAJAX()">

	<h2>Lista de empleados</h2>

	<form id="idFormulario">
		<input type="button" value="Filtrar por" onclick="peticionAJAX()">

		<select id="idFiltro" name="filtro">
			<option value="nombre" selected="selected">Nombre</option>
			<option value="apellidos">Apellido</option>
			<option value="telefono">Telefono</option>
		</select>
		<input name="palabra" type="text" id="idTexto">
	</form>


	<div id="idLista"></div>

</body>