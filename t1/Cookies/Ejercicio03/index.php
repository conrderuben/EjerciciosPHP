<h2>Listado de cookies por nivel</h2>

Nivel0---><a href="visualizarcookies.php">Listado de cookies</a><br>
Nivel0--->Nivel1--><a href="visualizarcookies.php">Listado de cookies</a><br>
Nivel0--->Nivel1-->Nivel2<a href="visualizarcookies.php">Listado de cookies</a><br>


<h2>Creación de cookies en diferentes niveles (directorios) por
un script ubicado en /</h2>
<h3>Se permite fijar nombre de contenido de la cookie, así como el nivel</h3>

<form action="ubicaCookie.php">
<caption>
Nombre<input type="text" name="Nombre">
Contenido<input type="text" name="Contenido">
<br>
Nivel
<select id="Nivel"
			name="Nivel">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
<input type="submit" name="boton" value="Crea cookie">


</caption>


</form>
