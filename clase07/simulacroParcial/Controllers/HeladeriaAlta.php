<?php
/*
Pérez, Gonzalo Ezequiel

1-
B- (1 pt.) HeladeriaAlta.php: (por POST) se ingresa Sabor, Precio, Tipo (“Agua” o “Crema”), Vaso (“Cucurucho”, “Plástico”), Stock (unidades).
Se guardan los datos en en el archivo de texto heladeria.json, tomando un id autoincremental como identificador(emulado).
    Sí el nombre y tipo ya existen, se actualiza el precio y se suma al stock existente.
Completar el alta con imagen del helado, guardando la imagen con el sabor y tipo como identificación en la carpeta /ImagenesDeHelados/2024.

*/

require_once __DIR__."/../Models/Helado.php";

if(
    isset($_POST["Sabor"]) && 
    isset($_POST["Precio"]) &&
    isset($_POST["Tipo"]) &&
    isset($_POST["Vaso"]) &&
    isset($_POST["Stock"])
    )  {

    if()

    $helado = new Helado(0, $_POST["Sabor"], $_POST["Precio"], $_POST["Tipo"], $_POST["Vaso"], $_POST["Stock"]);

    Libro::guardarLibro($libro);


} else {

    echo "Parametros incorrectos";

}

function AltaHelado($helado) {

    $ubicacion = __DIR__."/../Producto/productos.json";
    $operacion = 0;
    
    if(!file_exists($ubicacion)) {
        
        $archivo = fopen($ubicacion, "w");
        fclose($archivo);
    }

    if(!ConsultaHelado::ValidarExistencia($producto, $listaProductos)) {

        array_push($listaProductos, get_object_vars($producto));
        $operacion = 1;

    } else {

        $operacion = 2;
    }

    //var_dump($listaProductos);
    
    $jsonDatos = json_encode($listaProductos, JSON_PRETTY_PRINT); 
    
    if(file_put_contents($ubicacion, $jsonDatos) > 0) {
        $resultado = true;
    }

    if($resultado)
        if($operacion == 1)
            echo "Ingresado\n";
        else if($operacion == 2)
            echo "Actualizado\n";
    else
        echo "No se pudo hacer\n";

}