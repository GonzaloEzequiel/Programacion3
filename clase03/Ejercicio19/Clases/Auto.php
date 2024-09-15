<?php

require_once(__DIR__."/../../../clase02/Ejercicio17/Clases/Auto.php");

/*
Crear un método de clase para poder hacer el alta de un Auto, guardando los datos en un archivo
autos.csv.
Hacer los métodos necesarios en la clase Auto para poder leer el listado desde el archivo
autos.csv
Se deben cargar los datos en un array de autos.
*/

class Automovil extends Auto {

    public static function AltaAuto($auto) {

        $archivo;
        $caracteresEscritos = 0;
        $resultado = false;
    
        if(!file_exists(__DIR__."/../autos.csv")) {
    
            $archivo = fopen(__DIR__."/../autos.csv", "w");        
            $caracteresEscritos = fwrite($archivo, "marca,color,precio,fecha");
            fclose($archivo);
        }

        $archivo = fopen(__DIR__."/../autos.csv", "a");
        $caracteresEscritos = fwrite($auto->_marca.",".$auto->_color.",".$auto->_precio.",".$auto->_fecha);
    
        if($caracteresEscritos > 0) {
            $resultado = true;
        }     
    
        fclose($archivo);
    
        if($resultado)
            echo "Auto dado de alta";
        else
            echo "Error al dar de alta el auto";
    
    }
    
    /**
     * Lee todos los autos del archivo autos.csv y los muestra.
     */
    public static function leerAutos() {
        $archivo = fopen("autos.csv", "r");
        $arrayAutos = array();
    
        while(!feof($archivo)) {
            array_push($arrayAutos, fgetcsv($archivo, filesize("autos.csv")));
        }    
    
        fclose($archivo);
    
        return $arrayAutos;
    }

}