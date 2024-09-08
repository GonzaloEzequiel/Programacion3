<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos

privados: _color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
por parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);

En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio. 
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1,3,5)
*/

require_once(__DIR__."/./Clases/Auto.php");
date_default_timezone_set('America/Argentina/Buenos_Aires');

$testFecha = (new DateTime('now'))->format('d-m-Y H:i:s');

// ● Crear dos objetos “Auto” de la misma marca y distinto color.
$auto1 = new Auto("Fiat", "Negro");
$auto2 = new Auto("Fiat", "Rojo");
// ● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio. 
$auto3 = new Auto("Audi", "Azul", 35000000.50);
$auto4 = new Auto("Audi", "Azul", 45000000.50);
// ● Crear un objeto “Auto” utilizando la sobrecarga restante.
$auto5 = new Auto("Peugeot", "Gris", 5000000.75, $testFecha);
// ● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al atributo precio.
$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);
// ● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el resultado obtenido.
echo "Suma del primer y segundo auto: $" . Auto::Add($auto1, $auto2) . "\n";

// ● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
echo "Se comparan el primer y segundo auto: "; 
if($auto1->Equals($auto2))
    echo "Son iguales\n";
else
    echo "Son distintos\n";

echo "Se comparan el primer y quinto auto: ";
if($auto1->Equals($auto5))
    echo "Son iguales\n";
else
    echo "Son distintos\n";

// ● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1,3,5)
Auto::MostrarAuto($auto1);
Auto::MostrarAuto($auto3);
Auto::MostrarAuto($auto5);

