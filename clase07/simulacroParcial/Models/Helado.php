<?php

enum Tipo
{
    case Agua;
    case Crema;
}

enum Vaso
{
    case Cucurucho;
    case Pástico;
}

class Helado {    

    private $_sabor;
    private $_precio;
    private Tipo $_tipo;
    private Vaso $_vaso;
    private $_stock;    

    public function __consturct($sabor, $precio, $tipo, $vaso, $stock) {
        $this->_sabor = $sabor;
        $this->_precio = $precio;
        $this->_tipo = $tipo;
        $this->_vaso = $vaso;
        $this->_stock = $stock;
    }

    public function __get($propiedad) { 
        if( property_exists($this, $propiedad) )  {
            return $this->$propiedad;
        }
    }

    public function __set($propiedad, $valor) { 
        if( property_exists($this, $propiedad) )  {

            if (
                $propiedad === "_tipo" && ($valor != Tipo::Agua || $valor != Tipo::Crema) || 
                $propiedad === "_vaso" && ($valor != Vaso::Cucurucho || $valor != Vaso::Pástico)
                ) {}
            else {
                $this->$propiedad = $valor;
            }            
        }
    }

    public static function LeerHelados() {

        $lectura = file_get_contents(__DIR__."/../Helados.json");

        $arrayHelados = json_decode($lectura, true);

        if(json_last_error() === JSON_ERROR_NONE) {

            return $arrayHelados;

        }else {

            echo "Error al decodificar el JSON: " . json_last_error_msg();
        }
    }

    public static function BuscarHelado($helado) {

        $helados = Helado::LeerHelados();

        

    }
}