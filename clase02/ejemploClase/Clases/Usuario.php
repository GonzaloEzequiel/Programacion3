<?php
require_once __DIR__ . "/../IMostrable.php";

class Usuario implements IMostrable {

    // Atributos
    protected $nombre;
    protected $aprellido;
    private $_dni;
    public $edad;

    public static $cantidadUsuarios = 0;

    // Constructor
    public function __construct($nombre, $apellido, $dni = 0, $edad = 0)
    {
        $this->nombre = $nombre;
        $this->aprellido = $apellido;
        $this->_dni = $dni;
        $this->edad = $edad;

        self::$cantidadUsuarios++;
        // lo mismo que Usuario::$cantidadUsuarios++;
    }

    // Métodos
    public function GetDni() {
        return $this->_dni;
    }

    public function ToString() {
        return "\nNombre: $this->nombre - Apellido:  $this->aprellido";
    }

    public function Mostrar() {
        echo $this->ToString();
    }

    public static function MostrarCantidadUsuarios() {
        echo "\nCantidad de Usuarios: ", self::$cantidadUsuarios;
    }

}