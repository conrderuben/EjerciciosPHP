<?php
if(isset($_GET['ns']) && !isset($_SESSION['ns'])){
    $_SESSION['ns']=$_GET['ns'];
    $_SESSION['n']=1;
    $_SESSION['numeros'][];
}
if(isset($_POST['num'])){
    $_SESSION['n']++;
    $_SESSION['numeros']=$_POST['num'];
}

if($_SESSION['n']==$_SESSION['ns']){
    
}
echo "<form method='post'>
Introduce el sumando número {$_SESSION['n']} (1..10)<br>
<input type='text' max='10' min='1' name='num'>
</form>";