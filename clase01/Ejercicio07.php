<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.

*/

$array = array();

for($i=1; $i<20; $i+=2) {
    array_push($array, $i);
}

echo "Estructura for:<br/>";
for($i=0; $i<10; $i++) {
    echo "$array[$i] <br/>";
}

echo "<br/>Estructura while:<br/>";
$contador=0;
while($contador < 10) {
    echo "$array[$contador] <br/>";
    $contador++;
}

echo "<br/>Estructura foreach:<br/>";
foreach($array as $numero) {
    echo "$numero <br/>";
}
