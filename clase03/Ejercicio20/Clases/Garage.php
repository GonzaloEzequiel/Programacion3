<?php

    require_once(__DIR__."/../../../clase02/Ejercicio18/Clases/Garage.php");
    require_once(__DIR__."/../../Ejercicio19/Clases/Auto.php");

class GaragePremium extends Garage {
    
    /**
     * Agrega los atributos de un garage dado, al archivo csv.
     */
    public static function AltaGarage($garage) {

        $caracteresEscritos = 0;
        $resultado = false;
    
        if(!file_exists(__DIR__."/../garages.csv")) {
    
            $archivo = fopen(__DIR__."/../garages.csv", "w");        
            $caracteresEscritos = fwrite($archivo, "razonSocial,precioPorHora,autos");
            fclose($archivo);
        }

        $archivo = fopen(__DIR__."/../garages.csv", "a");
        $caracteresEscritos = fwrite($archivo, "\n".GaragePremium::DatosGarageACsv($garage));
    
        if($caracteresEscritos > 0) {
            $resultado = true;
        }     
    
        fclose($archivo);
    
        if($resultado)
            echo "Garage dado de alta\n";
        else
            echo "Error al dar de alta el Garage\n";

    }

    /**
     * Lee todos los garages del archivo garages.csv y los muestra.
     */
    public static function LeerGarages() {
        $archivo = fopen(__DIR__."/../garages.csv", "r");
        $arrayGarages = [];
    
        while(!feof($archivo)) {            
            array_push($arrayGarages, fgets($archivo));
        }
    
        fclose($archivo);
    
        return $arrayGarages;
    }

    /**
     * Valida los atributos existentes del garage y los vuelca en una cadena con formato csv
     */
    public static function DatosGarageACsv($garage) {
        $cadenaAEscribir = $garage->GetRazonSocial().",".$garage->GetPrecioPorHora();
        if(!is_null($garage->GetAutos())) {
            foreach($garage->GetAutos() as $auto) {
                $cadenaAEscribir = $cadenaAEscribir.",".Automovil::DatosAutoACsv($auto);
            }
        }
         

        return $cadenaAEscribir;
    }

}
