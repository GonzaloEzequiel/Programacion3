<?php

require_once(__DIR__."/../../../clase02/Ejercicio17/Clases/Auto.php");

/*
Crear un método de clase para poder hacer el alta de un Auto, guardando los datos en un archivo autos.csv.
Hacer los métodos necesarios en la clase Auto para poder leer el listado desde el archivo autos.csv
Se deben cargar los datos en un array de autos.
*/

class Automovil extends Auto {

    /**
     * Agrega los atributos de un auto dado, al archivo csv.
     */
    public static function AltaAuto($auto) {

        $caracteresEscritos = 0;
        $resultado = false;
    
        if(!file_exists(__DIR__."/../autos.csv")) {
    
            $archivo = fopen(__DIR__."/../autos.csv", "w");        
            $caracteresEscritos = fwrite($archivo, "marca,color,precio,fecha");
            fclose($archivo);
        }

        $archivo = fopen(__DIR__."/../autos.csv", "a");
        $caracteresEscritos = fwrite($archivo, "\n".Automovil::DatosAutoACsv($auto));
    
        if($caracteresEscritos > 0) {
            $resultado = true;
        }     
    
        fclose($archivo);
    
        if($resultado)
            echo "Auto dado de alta\n";
        else
            echo "Error al dar de alta el auto\n";
    
    }
    
    /**
     * Lee todos los autos del archivo autos.csv y los muestra.
     */
    public static function LeerAutos() {
        $archivo = fopen(__DIR__."/../autos.csv", "r");
        $arrayAutos = [];
    
        while(!feof($archivo)) {
            array_push($arrayAutos, fgetcsv($archivo, 0, ',', '"', "\n"));
        }
    
        fclose($archivo);
    
        return $arrayAutos;
    }

    /**
     * Valida los atributos existentes del auto y los vuelca en una cadena con formato csv
     */
    public static function DatosAutoACsv($auto) {
        $cadenaAEscribir = $auto->GetMarca().",".$auto->GetColor();
        if(!is_null($auto->GetPrecio()))
            $cadenaAEscribir = $cadenaAEscribir.",".$auto->GetPrecio();
        if(!is_null($auto->GetFecha()))
            $cadenaAEscribir = $cadenaAEscribir.",".$auto->GetFecha();

        return $cadenaAEscribir;
    }
}