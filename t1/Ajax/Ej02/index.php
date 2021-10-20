
<head>
<script>
	function f() {
		var xmlhttp = new XMLHttpRequest();
		//Abre la conexion
		xmlhttp.open("GET","ajax.php?ccaa=" + document.getElementById('ccaa').value,true);
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
				document.getElementById("myDiv").innerHTML= xmlhttp.responseText;
			}
		}
	}
</script>
</head>

<body>
	<h1>Comunidades autonomas</h1>
	<label for="ccaa">ccaa</label>
	<select id="ccaa" onChange="f();">
<?php
include ("bd.php");
foreach ($provincias as $k => $v) {
    echo "<option>$k</option>";
}
?>
</select>
	<div id="myDiv">
		<label for="provincias">provincias</label> <select id="provincias">
<?php
include ("bd.php");
foreach (current($provincias) as $v) {
    echo "<option>$v</option>";
}
?>
</select>
	</div>
	<br>
	<h2>Escoge una comunidad autonoma</h2>
</body>
