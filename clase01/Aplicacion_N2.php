<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/

$today = date("j/ n/ Y");
$mes = date("n");

echo 'Usando echo la fecha es: ', $today, "</br>";

print("Usando la funcion print con cadena interpolada hoy es: $today </br>");

printf("Usando la funcion printf con un máscara para la variable en posicion '{0}', día: %s </br>", $today);

switch($mes) {
    case 1:
    case 2:
    case 3:
        echo "Estamos en Verano! 🌞";
        break;
    case 4:
    case 5:
    case 6:
        echo "Estamos en Otoño! 🍁";
        break;
    case 7:
    case 8:
    case 9:
        echo "Estamos en Invierno! 🥶";
        break;
    default:
        echo "Estamos en Primavera! 🌺";
        break;
}

?>