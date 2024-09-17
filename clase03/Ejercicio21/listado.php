<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 21 (Listado CSV y array de usuarios)
Archivo: listado.php
método:GET
Recibe qué listado va a retornar (ej:usuarios,productos,vehículos, ...etc, por ahora solo tenemos usuarios).
En el caso de usuarios carga los datos del archivo usuarios.csv se deben cargar los datos en un array de usuarios.

Retorna los datos que contiene ese array en una lista

<ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

Hacer los métodos necesarios en la clase usuario
*/

require_once(__DIR__."/../Ejercicio20Bis/Clases/Usuario.php");

if(isset($_GET['listado'])) {

    switch($_GET['listado']) {
        
        case "usuarios":

                $usuariosLeidos = Usuario::LeerUsuarios();
                array_shift($usuariosLeidos);

                foreach($usuariosLeidos as $usuario => $valores) {

                    $auxArray = explode(',', $valores);

                    echo "<ul>";
                    echo "<li>".$auxArray[0]."</li>";
                    echo "<li>".$auxArray[1]."</li>";
                    echo "<li>".$auxArray[2]."</li>";
                    echo "</ul>";

                }

            break;

        case "productos":
        case "vehículos":
            break;

        default:
            echo "Listado Inexistente !!";
            break;
    }
}



