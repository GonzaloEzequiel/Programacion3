<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 20 BIS (Registro CSV)
Archivo: registro.php
método:POST

Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario
*/

require_once __DIR__."/./Clases/Usuario.php";

if(
    isset($_POST['nombre']) &&
    isset($_POST['clave']) &&
    isset($_POST['mail'])
) {
    Usuario::RegistrarUsuario(new Usuario($_POST['nombre'], $_POST['clave'], $_POST['mail']));
}