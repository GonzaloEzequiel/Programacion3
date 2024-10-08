<?php

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        if(isset($_GET['accion'])) {

            switch ($_GET['accion']){
                case 'leer':
                    echo 'Leer archivo';
                    // Ejemplo de in
                    //include 'Usuario.php';
                    //Usuario::LeerUsuarios();
                    break;

                case 'buscar':
                    echo 'Buscar archivo';
                    break;

                default:
                    echo 'Accion invalida';
            }
        }
        else {
            echo 'No se ha definido el parámetro "accion"';
        }        
        break;

    case 'POST':
        echo 'POST';
        break;

    default:
        echo 'Verbo no permitido';
        break;
}