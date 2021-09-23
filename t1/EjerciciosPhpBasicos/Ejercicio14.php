<?php

// ------------------------------MENU---------------------------------
function menu()
{
    $opcionEscogida = - 1;
    $opcionMaxima = 9;

    while ($opcionEscogida < 0 || $opcionEscogida > $opcionMaxima) {

        $menu = <<<RUBEN
        
        MENU 
        
        OPCIONES:
        
        DEPARTAMENTOS:
        1. CREAR DEPARTAMENTO
        2. BORRAR DEPARTAMENTO
        3. MODIFICAR DEPARTAMENTO
        4. MOSTRAR DEPARTAMENTOS
        
        
        EMPLEADOS:
        5. CREAR EMPLEADO
        6. BORRAR EMPLEADO
        7. MODIFICAR EMPLEADO
        8. MOSTRAR EMPLEADO
        9. FILTRAR EMPLEADO POR ID
        
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
                borrarDep($bd);
                break;
            case 3:
                modificarDep($bd);
                break;
            case 4:
                mostrarDep($bd);
                break;
            case 5:
                crearEmp($bd);
                break;
            case 6:
                borrarEmp($bd);
                break;
            case 7:
                modificarEmp($bd);
                break;
            case 8:
                mostrarEmp($bd);
                break;
            case 9:
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
    fscanf(STDIN, "%d\n", $id);
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

// -----------------------------BORRAR DEPARTAMENTO------------------------------
function borrarDep(&$bd)
{
    echo "\n";
    echo "BORRAR DEPARTAMENTO";
    echo "\n";
    echo "DAME EL ID DE DEPARTAMENTO";
    fscanf(STDIN, "%d\n", $id);
    if (isset($bd['departamento'])) {
        if (array_key_exists($id, $bd['departamento'])) {

            unset($bd['departamento'][$id]);
            echo "BORRADO REALIZADO";
        } else {
            echo "EL ID NO EXISTE";
        }
    } else {
        echo PHP_EOL;
        echo "NO HAY DEPARTAMENTOS REGISTRADOS";
        echo PHP_EOL;
    }
    siguiente();
}

// -----------------------------MODIFICAR DEPARTAMENTO---------------------------
function modificarDep(&$bd)
{
    echo "\n";
    echo "MODIFICAR DEPARTAMENTO";
    echo "\n";
    echo "DAME EL ID DE DEPARTAMENTO";
    fscanf(STDIN, "%d\n", $id);
    if (isset($bd['departamento'])) {
        if (array_key_exists($id, $bd['departamento'])) {
            echo "\n";
            echo "nombre: ";
            fscanf(STDIN, "%s\n", $nombre);
            echo "\n";
            echo "desc: ";
            $desc = readline();
            unset($bd['departamento'][$id]);
            $bd['departamento'][$id] = [
                'nombre' => $nombre,
                'desc' => $desc
            ];

            echo "MODIFICACIÓN REALIZADA";
        } else {
            echo "EL ID NO EXISTE";
        }
    } else {
        echo PHP_EOL;
        echo "NO HAY DEPARTAMENTOS REGISTRADOS";
        echo PHP_EOL;
    }
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
        } else {

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
    }

    $bd['empleado'][$id] = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'idDpto' => $idDep
    ];
    siguiente();
}

// ---------------------------BORRAR EMPLEADOS---------------------------
function borrarEmp(&$bd)
{
    echo "\n";
    echo "BORRAR EMPLEADO";
    echo "\n";
    echo "DAME EL ID DE EMPLEADO";
    fscanf(STDIN, "%d\n", $id);
    if (isset($bd['empleado'])) {
        if (array_key_exists($id, $bd['empleado'])) {

            unset($bd['empleado'][$id]);
            echo "BORRADO REALIZADO";
        } else {
            echo "EL ID NO EXISTE";
        }
    } else {
        echo PHP_EOL;
        echo "NO HAY EMPLEADOS REGISTRADOS";
        echo PHP_EOL;
    }
    siguiente();
}

// ---------------------------MODIFICAR EMPLEADOS--------------------------
function modificarEmp(&$bd)
{
    echo "\n";
    echo "MODIFICAR EMPLEADO";
    echo "\n";
    echo "DAME EL ID DE EMPLEADO";
    fscanf(STDIN, "%d\n", $id);
    if (isset($bd['empleado'])) {
        if (array_key_exists($id, $bd['empleado'])) {
            echo "\n";
            echo "nombre: ";
            fscanf(STDIN, "%s\n", $nombre);
            echo "\n";
            echo "apellido: ";
            $apellido = readline();
            echo "\n";
            echo "idDpto: ";
            $idDpto = readline();
            if (isset($bd['departamento']) && array_key_exists($idDpto, $bd['departamento'])) {
                $bien = true;
            } else {

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
                    crearEmp($bd);
                }
            }
            unset($bd['empleado'][$id]);
            $bd['empleado'][$id] = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'idDpto' => $idDpto
            ];
            echo PHP_EOL;
            echo "MODIFICACIÓN REALIZADA";
        } else {
            echo "EL ID NO EXISTE";
        }
    } else {
        echo PHP_EOL;
        echo "NO HAY DEPARTAMENTOS REGISTRADOS";
        echo PHP_EOL;
    }
    siguiente();
}

// ---------------------------MOSTRAR EMPLEADOS---------------------------
function mostrarEmp($bd)
{
    echo "\n";
    echo "MOSTRAR EMPLEADOS";
    echo "\n";
    if (isset($bd['empleado'])) {

        foreach ($bd['empleado'] as $id => $empleado) {
            echo "->id:$id nombre:{$empleado['nombre']} apellido:{$empleado['apellido']} departamento: ({$bd['departamento'][$empleado['idDpto']]['nombre']})";
        }
    } else {
        echo PHP_EOL;
        echo "NO HAY EMPLEADOS REGISTRADOS";
        echo PHP_EOL;
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
    if (isset($bd['empleado'])) {
        if (array_key_exists($id, $bd['empleado'])) {

            echo "->id:$id nombre:{$bd['empleado'][$id]['nombre']} apellido:{$bd['empleado'][$id]['apellido']} departamento: ({$bd['empleado'][$id]['idDpto']})";
        } else {
            echo "EL ID NO EXISTE";
        }
    } else {
        echo PHP_EOL;
        echo "NO HAY EMPLEADOS REGISTRADOS";
        echo PHP_EOL;
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