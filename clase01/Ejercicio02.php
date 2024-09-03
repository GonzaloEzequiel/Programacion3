<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/

$today = date("j/n/Y");
$mes = date("n");

echo 'Usando echo | día: ', date("j"), "</br>";
print("Usando la funcion print con cadena interpolada | mes: $mes </br>");
printf("Usando la funcion printf con un máscara para la variable en posicion '{0}' | año: %s </br>", date("Y"));

echo "</br>La fecha de hoy es $today y ";
switch($mes) {
    case 1:
    case 2:
        echo "estamos en Verano! 🌞";
        break;

    case 3:
        if((int)$dia < 21)
            echo "estamos en Verano! 🌞";
        else
            echo "estamos en Otoño! 🍁";
        break;

    case 4:
    case 5:
        echo "estamos en Otoño! 🍁";
        break;

    case 6:        
        if((int)$dia < 21)
            echo "estamos en Otoño! 🍁";
        else
            echo "estamos en Invierno! 🥶";
        break;        

    case 7:
    case 8:
        echo "estamos en Invierno! 🥶";
        break;

    case 9:
        if((int)$dia < 21)
            echo "estamos en Invierno! 🥶";
        else
            echo "estamos en Primavera! 🌺";
        break;

    default:
        if((int)$mes == 12 && (int)$dia >= 21)
            echo "estamos en Verano! 🌞";
        else
            echo "estamos en Primavera! 🌺";
        break;
}