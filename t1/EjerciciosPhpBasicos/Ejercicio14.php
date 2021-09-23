<?php

// ------------------------------MENU---------------------------------
function menu()
{
    $opcionEscogida = - 1;
    $opcionMaxima = 5;

    while ($opcionEscogida < 0 || $opcionEscogida > $opcionMaxima) {

        $menu = <<<RUBEN
        
        MENU 
        
        OPCIONES:
        
        DEPARTAMENTOS:
        1. CREAR DEPARTAMENTO
        2. MOSTRAR DEPARTAMENTOS
        
        
        EMPLEADOS:
        3. CREAR EMPLEADO
        4. MOSTRAR EMPLEADO
        5. FILTRAR EMPLEADO POR ID
        
        0. SALIR
        
        OPCION(1-$opcionMaxima):   
        RUBEN;

        echo $menu;
        fscanf(STDIN, "%d\n", $opcionEscogida);
        echo PHP_EOL;
    }
    return $opcionEscogida;
}

// -------------------------------SWITCH ACCION-----------------------------
function ejecutarMenu(&$bd)
{
    $terminar = false;
    while (! $terminar) {

        switch (menu()) {
            case 0:
                echo "ADIOS\n";
                $terminar = true;
                break;
            case 1:
                crearDep($bd);
                break;
            case 2:
                mostrarDep($bd);
                break;
            case 3:
                crearEmp($bd);
                break;
            case 4:
                mostrarEmp($bd);
                break;
            case 5:
                mostrarEmpId($bd);
                break;
        }
    }
}

// ---------------------------CREAR DEPARTAMENTO------------------------------
function crearDep(&$bd)
{
    echo "\n";
    echo "CREAR DEPARTAMENTO";
    echo "\n";
    echo "Dime el id del departamento: ";
    $id = readline();
    echo "Dime el nombre del departamento: ";
    $nombre = readline();
    echo "Dime la descripcion del departamento: ";
    $desc = readline();
    $bd['departamento'][$id] = [
        'nombre' => $nombre,
        'desc' => $desc
    ];
    siguiente();
}

// ----------------------------MOSTRAR DEPARTAMENTOS----------------------------
function mostrarDep($bd)
{
    echo "\n";
    echo "MOSTAR DEPARTAMENTO";
    echo "\n";
    foreach ($bd['departamento'] as $id => $departamento) {
        echo "->id:$id nombre:{$departamento['nombre']} ({$departamento['desc']})";
    }
    siguiente();
    ;
}

// -----------------------------CREAR EMPLEADO------------------------------------
function crearEmp(&$bd)
{
    echo "\n";
    echo "CREAR EMPLEADO";
    echo "\n";
    $bien = false;

    while (! $bien) {
        echo "Dime el id del empleado: ";
        $id = readline();
        echo "Dime el nombre del empleado: ";
        $nombre = readline();
        echo "Dime el apellido del empleado: ";
        $apellido = readline();
        echo "Dime el id del departamento: ";
        $idDep = readline();

        if (isset($bd['departamento']) && array_key_exists($idDep, $bd['departamento'])) {

            $bien = true;
        }
        echo "Error en el id del departamento";
        echo "\n";
        echo "\n";
        echo "Que desea?: crear departamento / cambiar departamento\n";
        echo "Tu elección: ";
        $respuesta = readline();
        if ($respuesta == "crear departamento") {
            $bien = true;
            crearDep($bd);
        } else if ($respuesta == "cambiar departamento") {
            $bien = false;
        } else {
            $bien = true;
        }
    }

    $bd['empleado'][$id] = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'idDpto' => $idDep
    ];
    siguiente();
}

// ---------------------------MOSTRAR EMPLEDOS---------------------------
function mostrarEmp($bd)
{
    echo "\n";
    echo "MOSTRAR EMPLEADOS";
    echo "\n";
    foreach ($bd['empleado'] as $id => $empleado) {
        echo "->id:$id nombre:{$empleado['nombre']} apellido:{$empleado['apellido']} departamento: ({$bd['departamento'][$empleado['idDpto']]['nombre']})";
    }
    siguiente();
    ;
}

// ---------------------------MOSTRAR EMPLEADO POR ID----------------------
function mostrarEmpId($bd)
{
    echo "\n";
    echo "MOSTRAR EMPLEADO POR ID";
    echo "\n";
    echo "DAME EL ID DE EMPLEADO ";
    fscanf(STDIN, "%d\n", $id);
    if (array_key_exists($id, $bd['empleado'])) {

        echo "->id:$id nombre:{$bd['empleado'][$id]['nombre']} apellido:{$bd['empleado'][$id]['apellido']} departamento: ({$bd['empleado'][$id]['idDpto']})";
    } else {
        echo "EL ID NO EXISTE";
    }

    siguiente();
}

// ---------------------------SIGUIENTE------------------------------------
function siguiente()
{
    $ok = '';
    echo PHP_EOL;
    echo "PULSA ENTER PARA CONTINUAR";
    fscanf(STDIN, "%s\n", $ok);

    ;
}

// ---------------------------INICIO PROGRAMA---------------------------------
$bd = [];
ejecutarMenu($bd);

?>