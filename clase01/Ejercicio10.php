<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.

*/

/**
 *  EJERCICIO 9 (ANTERIOR)
 */
$lapicera1 = array(
    "color"=>"Azul", 
    "marca"=>"Filgo", 
    "trazo"=>0.8, 
    "precio"=>200
);

$lapicera2["color"] = "Negro"; $lapicera2["marca"] = "Parker"; $lapicera2["trazo"] = 0.5; $lapicera2["precio"] = 1000;
$lapicera3["color"] = "Rojo"; $lapicera3["marca"] = "Uniball"; $lapicera3["trazo"] = 1.0; $lapicera3["precio"] = 800;

// ARRAY INDEXADO
$lapicero = [$lapicera1, $lapicera2, $lapicera3];

foreach($lapicero as $lapicera) {

    echo "Lapicera ";

    foreach($lapicera as $key => $value) {
        echo "$key: $value ";
    }

    echo "<br/>";
}


/**
 *  EJERCICIO 10
 */
$lapicera4["color"] = "Verde"; $lapicera4["marca"] = "Bic"; $lapicera4["trazo"] = 0.7; $lapicera4["precio"] = 500;
$lapicera5["color"] = "Azul"; $lapicera5["marca"] = "Pizzini"; $lapicera5["trazo"] = 0.6; $lapicera5["precio"] = 1500;
$lapicera6["color"] = "Negro"; $lapicera6["marca"] = "Rotting"; $lapicera6["trazo"] = 0.4; $lapicera6["precio"] = 2500;

// ARRAY ASOCIATIVO
$lapicero2 = array("elemento1"=>$lapicera4, "elemento2"=>$lapicera5, "elemento3"=>$lapicera6);

echo "<br/><br/>";

foreach($lapicero2 as $lapicera) {

    echo "Lapicera ";

    foreach($lapicera as $key => $value) {
        echo "$key: $value ";
    }

    echo "<br/>";
}