<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 24 (Listado JSON y array de usuarios)
Archivo: listado.php
método:GET

Recibe qué listado va a retornar (ej:usuarios, productos, vehículos, etc., por ahora solo tenemos usuarios).
En el caso de usuarios carga los datos del archivo usuarios.json.
Se deben cargar los datos en un array de usuarios.
Retorna los datos que contiene ese array en una lista.
Hacer los métodos necesarios en la clase usuario
*/

require_once __DIR__."/../Ejercicio23/Clases/Usuario.php";

$arrayUsuarios = Usuario::LeerUsuarios();
$destinoArchivos = __DIR__."/./Usuario/Fotos/";

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':

        if(isset($_GET['listado'])) {

            switch ($_GET['listado']) {

                case 'usuarios':
                    echo json_encode($arrayUsuarios);
                    break;

                case 'productos':
                    echo 'listado aun no dispobible';
                    break;

                case 'vehiculos':
                    echo 'listado no dispobible';
                    break;
                    
                default:
                    echo "listado inválido";
                    break;
            }

        } else {
            echo 'parámetro "listado" no declarado';
        }

        break;

    default:
        echo 'Verbo no permitido';
        break;
}