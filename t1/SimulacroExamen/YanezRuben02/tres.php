<?php 
session_start();
echo "Primer numero: {$_SESSION['numero1']}<br>";
echo "Primer numero: {$_GET['numero']}<br>";

if($_SESSION['numero1']>$_GET['numero']){
    echo "El primer numero es MAYOR que el segundo";
}else if($_SESSION['numero1']<$_GET['numero']){
    echo "El primer numero es MENOR que el segundo";
}else{
    echo "El primer numero es IGUAL que el segundo";
}

?>
<hr>
<a href='uno.php'>Volver a introducir numeros</a>
