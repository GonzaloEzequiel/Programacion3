<?php

class Auto {

    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct()
    {
        $parametros = func_get_args();
        $cantidadParametros = func_num_args();
        $constructorCorrespondiente = '__construct'.$cantidadParametros;

        if(method_exists($this, $constructorCorrespondiente))
            call_user_func_array(array($this, $constructorCorrespondiente), $parametros);
    }

    public function __construct2($marca, $color) {
        $this->_marca = $marca;
        $this->_color = $color;
    }

    public function __construct3($marca, $color, $precio) {
        $this->__construct2($marca, $color);
        $this->_precio = $precio;
    }

    public function __construct4($marca, $color, $precio, $fecha) {
        $this->__construct3($marca, $color, $precio);
        $this->_fecha = $fecha;
    }

    /**
     * Suma el valor del impuesto al precio del auto
     */
    public function AgregarImpuestos($impuesto) {
        $this->_precio += $impuesto;
    }

    /**
     * Muestra los datos existentes del auto
     */
    public static function MostrarAuto($auto) {        
        echo "Marca: $auto->_marca | Color: $auto->_color";
        if(!is_null($auto->_precio))
            echo " | Precio: $$auto->_precio";
        if(!is_null($auto->_fecha))
            echo " | Fecha: $auto->_fecha";
        echo "\n";
    }

    /**
     * Compara dos autos
     * Devuelve true si ambos autos son de la misma marca
     */
    public function Equals($otroAuto) {
        return $this->_marca == $otroAuto->_marca;
    }

    /**
     * Suma el total del precio de dos autos, sólo si son de la misma marca y color
     * Devueve el total sumado, o informa la diferencia
     */
    public static function Add($auto1, $auto2) {
        if($auto1->Equals($auto2)) {
            if($auto1->_color == $auto2->_color) {
                return $auto1->_precio + $auto2->_precio;
            }
            else {
                echo "Los autos no son del mismo color. ";
            }                
        }
        else {
            echo "Los autos no son de la misma marca. "; 
        }
        return 0;             
    }

}