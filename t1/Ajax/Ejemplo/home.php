<head>
	<script>
	function f() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","ajax.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("idDiv").innerHTML=xmlhttp.responseText;
			}
		}
	}
</script>

</head>

<body>
	<h2>Texto fijo</h2>
	<div id="idDiv">
		<h2>Texto cambiante</h2>
	</div>
	<button onclick="f()">Cambiar</button>

</body>