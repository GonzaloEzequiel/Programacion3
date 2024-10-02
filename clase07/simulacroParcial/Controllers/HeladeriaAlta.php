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

    $caracteresEscritos = 0;
    $resultado = false;

    if(!file_exists(__DIR__."/../autos.csv")) {

        $archivo = fopen(__DIR__."/../autos.csv", "w");        
        $caracteresEscritos = fwrite($archivo, "marca,color,precio,fecha");
        fclose($archivo);
    }

    $archivo = fopen(__DIR__."/../autos.csv", "a");
    $caracteresEscritos = fwrite($archivo, "\n".Automovil::DatosAutoACsv($auto));

    if($caracteresEscritos > 0) {
        $resultado = true;
    }     

    fclose($archivo);

    if($resultado)
        echo "Auto dado de alta\n";
    else
        echo "Error al dar de alta el auto\n";

}
