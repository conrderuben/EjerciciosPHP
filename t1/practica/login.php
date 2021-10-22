<?php
session_start();
if (isset($_GET['nUsuario']) && (! array_key_exists($_GET['nUsuario'], $_SESSION['bd']['usuarios']))) {
    $_SESSION['bd']['usuarios'][$_GET['nUsuario']] = [
        'pwd' => $_GET['nContraseña'],
        'mensajes' => []
    ];
}

$usuarios = isset($_SESSION['bd']['usuarios']) ? $_SESSION['bd']['usuarios'] : [];
$recordar = isset($_SESSION['bd']['_recordar']) ? $_SESSION['bd']['_recordar'] : false;
$activo = isset($_SESSION['bd']['_activo']) ? $_SESSION['bd']['_activo'] : "";
$_SESSION['bd'] = [
    '_activo' => $activo,
    '_recordar' => $recordar,
    'usuarios' => $usuarios
];

?>
<h1>LOGIN</h1>
<br>
<form action="listaUsuarios.php">
<?php
if ($recordar) {
    echo "Usuario <input type='text' name='usuario' value='{$_SESSION['bd']['_activo']}'><br>";
} else {
    echo "Usuario <input type='text' name='usuario'><br>";
}
?>
Contraseña <input type="password" name="contraseña"><br>

<?php
if ($_SESSION['bd']['_recordar']) {
    echo "Recordar <input type='checkbox' name='recordar' value='true' checked='checked'><br>";
} else {
    echo "Recordar <input type='checkbox' name='recordar' value='true'><br>";
}

?>
<input type="submit" value="Enviar"><br>
</form>
<br>
<a href="registrar.php">Registrar nuevo usuario</a>

