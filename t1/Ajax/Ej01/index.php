<head>
	<script>
	function f() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","ajax.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("idDiv").innerHTML= xmlhttp.responseText + document.getElementById('idText').value + "!!";
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