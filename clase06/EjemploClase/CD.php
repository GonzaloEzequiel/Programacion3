<?php

require_once __DIR__."/./db/AccesoDatos.php";

class CD {

    public $id;
    public $titulo;
    public $cantante;
    public $anio;

    public function mostrarDatos(){

    }

    public static function TraerTodosLosCds() {
        
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("SELECT id, titel as título, interpret as cantante,");
        $consulta->execute();
        $cdBuscado = $consulta->fecthObject('cd');
        return $cdBuscado;

    }

}