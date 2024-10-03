<?php
// Array Indexado PHP a JSON -> se tranforma en un array
$array = array("Jorge", "Hernan", "Pedro", "Marta");
$json = json_encode($array);

echo $json;
echo "<br>";


// Array Asociativo PHP a JSON -> se tranforma en un Objeto
$array_asoc = array("nombre" => "Jorge", "edad" => 32);
$json_b = json_encode($array_asoc);

echo $json_b;
echo "<br>";


// Clase/OBJ PHP a JSON
$clase = new StdClass();
$clase->variableCualquiera = true;
$clase->nombre = 'Jorge';
$clase->edad = 32;

$json_c = json_encode($clase);

echo $json_c;
echo "<br>";


// JSON a PHP (string a objeto)
$json_obj = '{"nombre":"Pedro", "edad":37}';
$obj = json_decode($json_obj);

var_dump($obj);

?>