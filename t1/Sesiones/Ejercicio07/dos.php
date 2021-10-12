<?php


session_start();
if(isset($_REQUEST['submit1'])){
$_SESSION['nombre']=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:null;
$_SESSION['apellido']=isset($_REQUEST['apellido'])?$_REQUEST['apellido']:null;
$_SESSION['fecha']=isset($_REQUEST['fecha'])?$_REQUEST['fecha']:null;
$_SESSION['genero']=isset($_REQUEST['genero'])?$_REQUEST['genero']:null;
$_SESSION['pareja']=isset($_REQUEST['pareja'])?$_REQUEST['pareja']:null;
$_SESSION['hijos']=isset($_REQUEST['hijos'])?$_REQUEST['hijos']:null;

}

$departamento=isset($_SESSION['departamento']) ? $_SESSION['departamento'] : '';
$salario=isset($_SESSION['salario']) ? $_SESSION['salario'] : '';
$comentarios=isset($_SESSION['comentarios']) ? $_SESSION['comentarios'] : '';


echo "
<form action='tres.php'>
<fieldset>
<legend>Datos Profesionales</legend>";

if($departamento=='marketing'){
    echo "Departamento <select name='departamento' >
          <option value='marketing' selected='selected'>$departamento</option>;
          <option value='ventas'>ventas</option>;
          <option value='compras'>compras</option>;
          <option value='recursos humanos'>recursos humanos</option>
          </select>";
}else if($departamento=='ventas'){
    echo "Departamento <select name='departamento' >
          <option value='marketing'>marketing</option>;
          <option value='ventas' selected='selected'>$departamento</option>;
          <option value='compras'>compras</option>;
          <option value='recursos humanos'>recursos humanos</option>
          </select>";
}else if($departamento=='compras'){
    echo "Departamento <select name='departamento' >
          <option value='marketing'>marketing</option>;
          <option value='ventas'>ventas</option>;
          <option value='compras' selected='selected'>$departamento</option>;
          <option value='recursos humanos'>recursos humanos</option>
          </select>";
}else if($departamento=='recursos humanos'){
    echo "Departamento <select name='departamento' >
          <option value='marketing'>marketing</option>;
          <option value='ventas'>ventas</option>;
          <option value='compras'>compras</option>;
          <option value='recursos humanos' selected='selected'>$departamento</option>
          </select>";
}else{
    echo "Departamento <select name='departamento' >
          <option value='marketing'>marketing</option>;
          <option value='ventas'>ventas</option>;
          <option value='compras'>compras</option>;
          <option value='recursos humanos'>recursos humanos</option>
</select>";
    
}
    

echo"
 <br>Salario <input type='text' name='salario' value=$salario><br>
Comentarios <textarea rows='5' cols='30' name='comentarios'>$comentarios</textarea><br>
<input type='submit' name='submit2' value='Grabar informacion e ir al paso 3- Datos bancarios'>
</fieldset>
</form>";
?>