<head>
	<script>

	function f() {
		var xmlhttp = new XMLHttpRequest();
		//Abre la conexion
		xmlhttp.open("GET","ajax.php?idioma=" + document.querySelector('input[name="idioma"]:checked').value,true);
		//true hace que sea asincrona
		//ajax.php es donde se conecta
		xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		//cabecera para asegurarse de que es una conexion ajax
		//Para post se envian los valores por el send(si son varios con un & entre ellos)
		//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
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
<?php 
include ('bd.php');
foreach ($idiomas as $k => $v){
    if($k=="ES"){
        echo $k;
        echo "<input type='radio' name='idioma' value='$k' checked='cheked' onChange='f()'>"; 
    }else{
        echo $k;
        echo "<input type='radio' name='idioma' value='$k' onChange='f()'>"; 
    }
       
}
?>
<br>
<div id='idDiv'>
<?php
include ("bd.php");
foreach (current($idiomas) as $k=>$v) {
    if($k==2){
        echo "<input type='button' value='$v'>";
    }else{
        echo $v;
        echo "<input type='text' name='$v'><br>" ;
    }
}

?>
</div>


</body>