<?php

require_once __DIR__."/./CD.php";

class CDController {

    public function insertarCD($titulo, $cantante, $anio) {
        
        $cd = new CD();
        $cd->titulo = $titulo;
        $cd->cantante = $cantante;
        $cd->anio = $anio;

        return $cd->InsertarElCdParametros();

    }
}