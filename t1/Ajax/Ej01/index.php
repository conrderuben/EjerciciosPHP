<head>
	<script>
	function f() {
		var xmlhttp = new XMLHttpRequest();
		//Abre la conexion
		xmlhttp.open("GET","ajax.php?nombre=" + document.getElementById('idText').value,true);
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
				document.getElementById("idDiv").innerHTML= xmlhttp.responseText;
			}
		}
	}
</script>

</head>

<body>
	<h2>SALUDADOR</h2>
	Introduce tu nombre<input type="text" id="idText">
	<div id="idDiv"></div>
	<button onclick="f()">Saludar</button>
</body>