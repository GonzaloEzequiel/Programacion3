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


public static function ValidarExistencia($helado, &$listaProductos) {

    foreach($listaProductos as &$prod) {

        if ($producto->GetCodigo() == $prod['codigoDeBarra']) {

            var_dump($listaProductos);
            var_dump($prod);
            var_dump($prod['stock']);
            var_dump($producto->stock);

            $prod['stock'] += $producto->stock;

            echo "Sumé"; echo "\n";
            var_dump($prod['stock']);
            var_dump($producto->stock);

            return true;
        }            
    }

    return false;
}

