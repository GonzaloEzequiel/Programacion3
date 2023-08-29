<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/

$sumador = 0;
$numerosSumados = array();

for($i=1; $sumador < 1000; $i++)
{
    $sumador += $i;
    array_push($numerosSumados, $i);
    echo "$i + ";
}

printf("...<br/>Se utilizaron %d numeros", count($numerosSumados));

?>