<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 21 (Listado CSV y array de usuarios)
Archivo: listado.php
método:GET
Recibe qué listado va a retornar (ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos usuarios).
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

                $auxArray = Usuario::LeerUsuarios();
                array_shift($auxArray);

                foreach($auxArray as $usuario) {
                    echo "<ul>";
                    echo "<li>".$usuario->GetNombre()."</li>";
                    echo "<li>Tea</li>";
                    echo "<li>Milk</li>";
                    echo "</ul>";
                }    
                break;
        default:
            break;
    }
}



