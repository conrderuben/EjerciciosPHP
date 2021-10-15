<?php
$ns=isset($_GET['ns'])?$_GET['ns']:null;
$n=isset($_GET['num'])?$_GET['num']:null;
$paso= isset($_GET['paso'])?$_GET['paso']:1;
$sumandos=isset($_GET['sumandos'])?unserialize($_GET['sumandos']):[];

if($n!=null){
    $sumandos[]=$n;
}
?>
<form>
Introduce el sumando número $paso (1..10)<br>
<input type='text' max='10' min='1' name='num'>
<input type='hidden' name='ns' value='{$ns}'>
<input type='hidden' name='paso' value='<?php $paso+1 ?>'>
<input type='hidden' name='paso' value='{serialize($sumandos)}'>
<input type='submit'>
</form>