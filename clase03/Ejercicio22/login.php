<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 22 (Login)
Archivo: Login.php
método: POST

Recibe los datos del usuario (clave, mail) por POST
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado.

Retorna un :

“Verificado” si el usuario existe y coincide la clave también.
“Error en los datos” si esta mal la clave.
“Usuario no registrado" si no coincide el mail
Hacer los métodos necesarios en la clase usuario.

*/

require_once(__DIR__."/../Ejercicio20Bis/Clases/Usuario.php");

$usuariosArray = Usuario::LeerUsuarios();
array_shift($usuariosArray);

if( isset($_POST['clave']) && isset($_POST['mail']) ) {

    $mensajeLogin = "Usuario no registrado";

    foreach($usuariosArray as $indice => $valores) {

        //Caso1 (existe usuario y coincide clave)
        if($_POST['clave'] == $valores[1] && $_POST['mail'] == $valores[2]) {

            $mensajeLogin = "Verificado."." Bienvenido: ".$valores[0];
        }
        //Caso2 (existe usuario y está mal la clave)
        elseif($_POST['clave'] == $valores[1] && $_POST['mail'] != $valores[2]) {

            $mensajeLogin = "Error en los datos";
        }     

    }

    echo $mensajeLogin;

}

