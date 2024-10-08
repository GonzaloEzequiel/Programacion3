<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 23 (Registro JSON)
Archivo: registro.php
método: POST

Recibe los datos del usuario (nombre, clave, mail) por POST, crea un ID autoincremental (emulado, puede ser un random de 1 a 10.000). 
Crear un dato con la fecha de registro, toma todos los datos y utilizar sus métodos para poder hacer el alta, guardando los datos en usuarios.json 
    y subir la imagen al servidor en la carpeta Usuario/Fotos/.

Retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario.
*/

require_once __DIR__."/./Clases/Usuario.php";

$arrayUsuarios = Usuario::LeerUsuarios();
$destinoArchivos = __DIR__."/./Usuario/Fotos/";

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        echo json_encode($arrayUsuarios);
        break;

    case 'POST':
        if(
            isset($_POST['nombre']) &&
            isset($_POST['mail']) &&
            isset($_POST['clave']) &&
            isset($_FILES['imagen'])
            ) {
                if( strpos($_FILES['imagen']['type'], "png") || strpos($_FILES['imagen']['type'], "jpeg") ) {

                    if( strpos($_FILES['imagen']['type'], "png") ) {
                        $_FILES["imagen"]["name"] = $_POST['nombre'].".png";
                    } else {
                        $_FILES["imagen"]["name"] = $_POST['nombre'].".jpeg";
                    }

                    if(!is_dir($destinoArchivos)) {

                        mkdir("Fotos");
                    }

                    Usuario::RegistrarUsuario(new Usuario($_POST['nombre'], $_POST['clave'], $_POST['mail']), $arrayUsuarios);                    
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], $destinoArchivos.$_FILES["imagen"]["name"]);
                }
                else {
                    echo "Extensión del archivo inválida";
                }                
        }
        else {
            echo "Faltan parámetros";
        }
        break;

    default:
        echo 'Verbo no permitido';
        break;
}