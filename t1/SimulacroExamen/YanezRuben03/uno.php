<head>
	<script>
	function f(tipo) {
		var xmlhttp = new XMLHttpRequest();
		//Abre la conexion
		var s=tipo+".php";
		console.log(s);
		xmlhttp.open("GET",s,true);
		//true hace que sea asincrona
		//ajax.php es donde se conecta
		//xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		//cabecera para asegurarse de que es una conexion ajax
		//Para post se envian los valores por el send(si son varios con un & entre ellos)
		//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//Esta cabecera cuando sea POST
		xmlhttp.send();
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById(tipo).value= xmlhttp.responseText;
			}
		}
	}
</script>
</head>
<body>
<input type="button" value='Peli favorita' onclick="f('peli')">
<input type="text" name='peli' id='peli'><br>
<input type="button" value='Cancion favorita' onclick="f('cancion')">
<input type="text" name='cancion'id='cancion'>
</body>
<?php
