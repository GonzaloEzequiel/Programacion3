<?php
/*
Pérez, Gonzalo Ezequiel

2-
(1pt.) HeladoConsultar.php: (por POST) Se ingresa Sabor y Tipo, si coincide con algún registro del archivo heladeria.json, retornar “existe”. 
    De lo contrario informar si no existe el tipo o el nombre.

*/


if( isset($_POST["Sabor"]) && isset($_POST["Tipo"]) ) {

    return BuscarHeladoExistente($_POST["Sabor"], $_POST["Tipo"]);
}


