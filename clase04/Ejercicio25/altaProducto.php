<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 25 (AltaProducto)
Archivo: altaProducto.php
método:POST

Recibe los datos del producto (código de barra (6 cifras), nombre, tipo, stock, precio) por POST, crea un ID autoincremental (emulado, puede ser un random de 1 a 10.000). 

Crear un objeto y utilizar sus métodos para poder verificar si es un producto existente:
    si ya existe el producto se le suma el stock
    de lo contrario se agrega al documento en un nuevo renglón

Retorna un :
    “Ingresado” si es un producto nuevo
    “Actualizado” si ya existía y se actualiza el stock.
    “no se pudo hacer“ si no se pudo hacer

Hacer los métodos necesarios en la clase
*/
require_once __DIR__.'/./Clases/Producto.php';

$lista = Producto::LeerProductos();

switch($_SERVER['REQUEST_METHOD']){

    case 'POST':
        if(
            isset($_POST['codigo']) &&
            isset($_POST['nombre']) &&
            isset($_POST['tipo']) &&
            isset($_POST['stock']) &&
            isset($_POST['precio'])
        ) {
            Producto::AgregarProducto(new Producto($_POST['codigo'], $_POST['nombre'], $_POST['tipo'], (int)$_POST['stock'], $_POST['precio']), $lista);

        } else {
            echo 'Faltan parámetros';
        }
        break;

    default:
        echo 'Verbo no permitido';
        break;
}