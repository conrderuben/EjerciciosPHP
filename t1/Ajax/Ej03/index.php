<head>
	<script>
	function f() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","ajax.php",true);
		xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
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
<?php 
include ('bd.php');
foreach ($idiomas as $k => $v){
    echo $k;
    echo "<input type='radio' name='idioma' value='$k'>";    
}
?>



</body>