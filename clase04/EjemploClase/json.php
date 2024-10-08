<?php
// Array Indexado PHP a JSON -> se tranforma en un array
echo "Array indexado en PHP, se convierte en un array JSON\n";
$arrayIndexPHP = array("Jorge", "Hernan", "Pedro", "Marta");
$arrayJSON = json_encode($arrayIndexPHP);

echo "\nArray Indexado PHP: ";
var_dump($arrayIndexPHP);
echo "\n";
echo "\nArray Indexado JSON: ";
echo $arrayJSON;
echo "\n";
echo "\n ---------------------------------------------------------------- \n";


// Array Asociativo PHP a JSON -> se tranforma en un Objeto
echo "Array asociativo en PHP, se convierte en un objteto JSON\n";
$arrayAsoc = array("nombre" => "Jorge", "edad" => 32);
$objetoJSON = json_encode($arrayAsoc);

echo "\nArray Asociativo PHP: ";
var_dump($arrayAsoc);
echo "\n";
echo "\nObjeto JSON: ";
echo $objetoJSON;
echo "\n";

echo "\n ---------------------------------------------------------------- \n";

// Clase/OBJ PHP a JSON
echo "Una instancia de un objeto, se convierte en un objteto JSON\n";
$clase = new StdClass();
$clase->variableCualquiera = true;
$clase->nombre = 'Jorge';
$clase->edad = 32;

$json_c = json_encode($clase);

echo "\nInstancia PHP: ";
var_dump($clase);
echo "\n";
echo "\nObjeto JSON: ";
echo $json_c;
echo "\n";

echo "\n ---------------------------------------------------------------- \n";

// JSON a PHP (string a objeto)
$json_obj = '{"nombre":"Pedro", "edad":37}';
$obj = json_decode($json_obj);

var_dump($obj);


?>