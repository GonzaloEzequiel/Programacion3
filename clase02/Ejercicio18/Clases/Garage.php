<?php

require_once(__DIR__."/../../Ejercicio17/Clases/Auto.php");

class Garage {
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = array();

    public function __construct() {
        $parametros = func_get_args();
        $cantidadParametros = func_num_args();
        $funcionConstructor = '__construct'.$cantidadParametros;

        if(method_exists($this, $funcionConstructor)) {
            call_user_func_array(array($this, $funcionConstructor), $parametros);
        }
    }

    public function __construct1($razonSocial)
    {
        $this->_razonSocial = $razonSocial;
    }

    public function __construct2($razonSocial, $precioPorHora)
    {
        $this->__construct1($razonSocial);
        $this->_precioPorHora = $precioPorHora;
    }

    /**
     * Muestra la información del garage y los autos que contiene
     */
    public function MostrarGarage(){
        echo "Razon social: $this->_razonSocial | Precio x Hora: $$this->_precioPorHora | Autos: " . count($this->_autos) . "\n";
        foreach($this->_autos as $auto) {
            Auto::MostrarAuto($auto);
        }
    }

    /**
     * Indica si un auto en particular se encuentra en el garage
     */
    public function Equals($auto) {
        return in_array($auto, $this->_autos);
    }

    /**
     * Agrega un auto al garage sólo si no se encontraba dentro previamente
     */
    public function Add($auto) {
        if(!$this->Equals($auto))
            array_push($this->_autos, $auto);
        else
            echo "El auto YA se encuentra en el garage\n";
    }

    /**
     * Quita un auto del garage sólo si se encontraba dentro previamente
     */
    public function Remove($auto) {
        if($this->Equals($auto)) {
            $this->_autos = array_filter($this->_autos, function($autosGarage) use($auto) { return $autosGarage != $auto; });
            echo "Gracias vuelva pronto...\n\n";
        }
            
        else
            echo "El auto NO se encuentra en el garage\n";
    }


    // funciones adicionales para ejercicio20

    /**
     *  GETTERs 
     */
    public function GetRazonSocial(){ return $this->_razonSocial; }
    public function GetPrecioPorHora(){ return $this->_precioPorHora; }
    public function GetAutos(){ return $this->_autos; }
    
}