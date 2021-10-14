
<?php
session_start();
if(isset($_GET['ns']) && !isset($_COOKIE['ns'])){
    setcookie('ns',$_GET['ns']);
    setcookie('n',1);
    setcookie('numeros',serialize([]));
}
if(isset($_POST['num'])){
    $_COOKIE['n']++;
    $_COOKIE['numeros'][]=(int)$_POST['num'];
}

if($_COOKIE['n']==$_COOKIE['ns']){
    echo "<form action='tres.php' method='post'>
Introduce el sumando número {$_COOKIE['n']} (1..10)<br>
<input type='text' max='10' min='1' name='num'>
<input type='submit'>
</form>";
    
}else{
    echo "<form method='post'>
Introduce el sumando número {$_COOKIE['n']} (1..10)<br>
<input type='text' max='10' min='1' name='num'>
<input type='submit'>
</form>";
}
?>