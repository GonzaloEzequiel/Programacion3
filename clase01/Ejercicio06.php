<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.

*/

$array = array();
$cantidadEnteros = 5;
$acumulador = 0;
$promedio;

for($i=0; $i<$cantidadEnteros; $i++) {
    array_push($array, rand(1, 10));
}

foreach($array as $entero) {
	$acumulador += $entero;
}

$promedio = $acumulador/$cantidadEnteros;

var_dump($array);

if($promedio > 6)
    echo "Promedio mayor a 6 ($promedio)";
else if($promedio < 6)
    echo "Promedio menor a 6 ($promedio)";
else
    echo "Promedio igual a 6";