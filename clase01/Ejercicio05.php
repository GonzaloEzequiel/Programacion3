<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

*/

$num = 57;

if($num < 20 || $num > 60)
    echo "Número por fuera del rango 20-60";
else {
    MostrarEnTexto($num);
}


function MostrarEnTexto($num) {

    $decena = (int) ($num / 10); 
    $unidad = $num % 10;

    switch($decena) {
        case 2:
            if($unidad != 0)
                echo "Veinti";
            else
                echo "Veinte";
            break;
        case 3:
            echo "Treinta";
            break;
        case 4:
            echo "Cuarenta";
            break;
        case 5:
            echo "Cincuenta";
            break;
        case 6:
            if($unidad < 1)
                echo "Sesenta";
            break;
        default:
            break;
    }
    
    if($decena > 2 && $decena < 6) {
    
        if($decena != 2 && $unidad != 0)
            echo " y ";
    
        switch($unidad) {
            case 1:
                echo "uno";
                break;
            case 2:
                echo "dos";
                break;
            case 3:
                echo "tres";
                break;
            case 4:
                echo "cuatro";
                break;
            case 5:
                echo "cinco";
                break;
            case 6:
                echo "seis";
                break;
            case 7:
                echo "siete";
                break;
            case 8:
                echo "ocho";
                break;
            case 9:
                echo "nueve";
                break;
            default:
                break;
        }
    }
}


