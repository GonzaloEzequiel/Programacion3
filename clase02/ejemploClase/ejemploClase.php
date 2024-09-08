<?php
/*
    class NombreClase {

        private static $rookie = "miRookie";

        function __construct()
        {
            
        }
    }

    class OtraClase extends NombreClase implements IVolar, ISaltar {

        public $lalala = "test";

        function VolarArriba() {
            echo "vuelo 2 turnos";
        }

        function SaltarArriba() {
            echo "Salto 1 turno";
        }

        function Test() {
            return "Test";
        }

    }

    interface IVolar {

        function VolarArriba();
        function Test();

    }

    interface ISaltar {

        function SaltarArriba();

    }
*/

class Usuario {

    // Atributos
    protected $nombre;
    protected $aprellido;
    private $_dni;
    public $edad;

    // Constructor
    public function __construct($nombre, $apellido, $_dni = 0, $edad = 0)
    {
        $this->nombre = $nombre;
        $this->aprellido = $apellido;
        $this->_dni = $_dni;
        $this->edad = $edad;
    }

    // Métodos

}

$usuario1 = new Usuario("Gonzalo", "Pérez", "331112969", "37");
$usuario2 = new Usuario("Florencia", "Yñiguez", "37817141", "31");
$usuario3 = new Usuario("Menta", "Lomita");
$usuario4 = new Usuario("Tuki", "Lomita", 0, 2);
$usuario5 = new Usuario("Nombre", "Apellido", "DNI", "EDAD", "TEST", "TEST_COSO");

$arrayUsuarios = [$usuario1, $usuario2, $usuario3, $usuario4, $usuario5];

var_dump($arrayUsuarios);
