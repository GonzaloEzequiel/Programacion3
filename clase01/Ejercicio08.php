<?php

/*
Pérez, Gonzalo Ezequiel

Aplicación No 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';

*/

$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']='mundo';

echo "Claves: <br>";
foreach($v as $key => $value) {
    echo "$key <br/>";
}

echo "<br/>Valores: <br>";
foreach($v as $value) {
    echo "$value <br/>";
}

echo "<br/>Claves y valores: <br>";
foreach($v as $key => $value) {
    echo "$key | $value <br/>";
}