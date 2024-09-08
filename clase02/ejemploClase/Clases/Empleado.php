<?php
require_once "./Clases/Usuario.php";

class Empleado extends Usuario {

    private $_sueldo;

    public function __construct($nombre, $apellido, $sueldo, $dni = 0, $edad = 0) {
        
        parent::__construct($nombre, $apellido, $dni, $edad);

        $this->_sueldo = $sueldo;

    }

    public function ToString() {

        return parent::ToString() . " - Sueldo: $this->_sueldo";
        
    }

}