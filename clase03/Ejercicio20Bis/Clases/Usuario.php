<?php

class Usuario {

    private $_nombre;
    private $_clave;
    private $_mail;

    public function __construct($nombre, $clave, $mail) {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_mail = $mail;
    }

    public function GetNombre() { return $this->_nombre; }
    public function GetClave() { return $this->_clave; }
    public function GetMail() { return $this->_mail; }


    /**
     * Registra un usuario y lo guarda en el archivo .csv
     */
    public static function RegistrarUsuario($usuario) {

        $caracteresEscritos = 0;
        $resultado = false;
    
        if(!file_exists(__DIR__."/../usuarios.csv")) {
    
            $archivo = fopen(__DIR__."/../usuarios.csv", "w");        
            $caracteresEscritos = fwrite($archivo, "nombre,clave,mail");
            fclose($archivo);
        }

        $archivo = fopen(__DIR__."/../usuarios.csv", "a");
        $caracteresEscritos = fwrite($archivo, "\n".$usuario->GetNombre().",".$usuario->GetClave().",".$usuario->GetMail());
    
        if($caracteresEscritos > 0) {
            $resultado = true;
        }     
    
        fclose($archivo);
    
        if($resultado)
            echo "Usuario dado de alta\n";
        else
            echo "Error al dar de alta el Usuario\n";

    }

    /**
     * Lee todos los usuarios del archivo usuarios.csv y los muestra.
     */
    public static function LeerUsuarios() {
        $archivo = fopen(__DIR__."/../usuarios.csv", "r");
        $arrayUsuarios = [];
    
        while(!feof($archivo)) {            
            array_push($arrayUsuarios, fgetcsv($archivo, 0, ',', '"', "\n"));
        }
    
        fclose($archivo);
    
        return $arrayUsuarios;
    }

    public static function ValidarUsuario() {
        
    }
}