<?php
/*
Pérez, Gonzalo Ezequiel

1-
A- (1 pt.) index.php: Recibe todas las peticiones que realiza el postman, y administra a qué archivo se debe incluir.

*/

require_once __DIR__."/../Controllers/HeladeriaAlta.php";

if(isset($_GET['accion'])){
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            switch ($_GET['accion']){
                case 'sesion':
                    include 'sesiones.php';
                    break;
                case 'cookies':
                    include 'cookies.php';
                    break;
                case 'json':
                    include 'json.php';
                    break;
                default:
                    echo 'Parámetro "accion" no permitido';
                    break;
            }
            break;
        case 'POST':
            switch ($_GET['accion']){
                case 'archivo':
                    include 'archivos.php';
                    break;
                default:
                    echo 'Parámetro "accion" no permitido';
                    break;
            }
            break;
        default:
            echo 'Verbo no permitido';
            break;
    }
} else {
    echo 'Parámetro "accion" no enviado';
}
