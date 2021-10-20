<?php session_start();
if(isset($_GET['nUsuario'])){
    $_SESSION['usuarios'][]=[$_GET['nUsuario']=>['pwd'=>$_GET['nContraseña']]];

}
$usuarios=isset($_SESSION['usuarios'])?$_SESSION['usuarios']:[];
$_SESSION['bd']=['_activo'=>"", '_recordar'=>false, 'usuarios'=>$usuarios];


?>
<h1>LOGIN</h1><br>
<form action="listaUsuarios.php">
<?php 
$recordar=isset($_SESSION['bd']['_recordar'])?$_SESSION['bd']['_recordar']:null;
if($recordar!=true){
    echo "Usuario <input type='text' name='usuario' value='{$_SESSION['bd']['_activo']}'><br>";
}else{
    echo "Usuario <input type='text' name='usuario'><br>";
}
?>
Contraseña <input type="password" name="contraseña"><br>

<?php 
    if($_SESSION['bd']['_recordar']==true){
        echo "Recordar <input type='checkbox' name='recordar' cheked='cheked'><br>";
    }else{
        echo "Recordar <input type='checkbox' name='recordar'><br>";
    }

?>
<input type="submit" value="Enviar"><br>
</form>
<br>
<a href="registrar.php">Registrar nuevo usuario</a>

