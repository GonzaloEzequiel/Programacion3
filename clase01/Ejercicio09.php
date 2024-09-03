<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.

*/

$lapicera1 = array(
    "color"=>"Azul", 
    "marca"=>"Filgo", 
    "trazo"=>0.8, 
    "precio"=>200
);

$lapicera2["color"] = "Negro"; $lapicera2["marca"] = "Parker"; $lapicera2["trazo"] = 0.5; $lapicera2["precio"] = 1000;
$lapicera3["color"] = "Rojo"; $lapicera3["marca"] = "Uniball"; $lapicera3["trazo"] = 1.0; $lapicera3["precio"] = 800;

$lapicero = [$lapicera1, $lapicera2, $lapicera3];

foreach($lapicero as $lapicera) {

    echo "Lapicera ";

    foreach($lapicera as $key => $value) {
        echo "$key: $value ";
    }

    echo "<br/>";
}