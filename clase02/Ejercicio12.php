<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/

// cambiar este valor
$cadenaOrignial = "Lorem ipsum dolor sit amet, consectetur adipiscing elit";

$arrayNormal = str_split($cadenaOrignial);
$cadenaInvertida = implode(InvertirCadena2($arrayNormal));

echo "Cadena elegida: $cadenaOrignial\n";
echo "Cadena invertida: $cadenaInvertida\n";

/**
 *  nah
 */
/*
function InvertirCadena($array) {

    return array_reverse($array);

}
*/

/**
 *  Recibe un array de caracteres e intercambia los valores de los índices
 *  Devuelve un array con los valores invertidos
 */
function InvertirCadena2($array) {

    $auxArray = array();

    for($i=1; $i<=count($array); $i++) {

        array_push($auxArray, $array[count($array)-$i]);
    }

    return $auxArray;

}