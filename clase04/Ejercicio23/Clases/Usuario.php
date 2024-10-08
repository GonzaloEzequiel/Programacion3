<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

class Usuario {

    private $nombre;
    private $clave;
    private $mail;

    public $id;
    public $fechaRegistro;

    public function __construct($nombre, $clave, $mail) {
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->mail = $mail;
    }

    public function GetNombre() { return $this->nombre; }
    public function GetClave() { return $this->clave; }
    public function GetMail() { return $this->mail; }


    /**
     * Registra un usuario con id y fecha y lo guarda en el archivo usuarios.json
     */
    public static function RegistrarUsuario($usuario, $usuarios) {
       
        $resultado = false;
        
        if(!file_exists(__DIR__."/../Usuario/usuarios.json")) {
            
            $archivo = fopen(__DIR__."/../Usuario/usuarios.json", "w");
            fclose($archivo);
        }

        $usuario->id = random_int(1, 10000);
        $usuario->fechaRegistro = (new DateTime('now'))->format('d-m-Y H:i:s');

        array_push($usuarios, get_object_vars($usuario));
        
        $jsonDatos = json_encode($usuarios, JSON_PRETTY_PRINT);
        $archivo = __DIR__."/../Usuario/usuarios.json";      
        
        if(file_put_contents($archivo, $jsonDatos) > 0) {
            $resultado = true;
        }
    
        if($resultado)
            echo "Usuario dado de alta\n";
        else
            echo "Error al dar de alta el Usuario\n";

    }

    /**
     * Lee todos los usuarios del archivo archivo usuarios.json
     */
    public static function LeerUsuarios() {

        if(file_exists(__DIR__."/../Usuario/usuarios.json")) {

            $archivo = file_get_contents(__DIR__."/../Usuario/usuarios.json");
            $arrayUsuarios = json_decode($archivo, true);
            return $arrayUsuarios;
        }
        else {
            return array();
        }
    }    
}