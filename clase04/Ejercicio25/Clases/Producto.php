<?php

class Producto {

    private $codigoDeBarra;
    private $nombre;
    private $tipo;
    private $stock;
    private $precio;

    public $id;

    public function GetCodigo() { return $this->codigoDeBarra; }
    public function SetStock($value) { $this->stock = $value; }

    public function __construct($codigoDeBarra, $nombre, $tipo, $stock, $precio) {
        $this->codigoDeBarra = $this->ValidacionCodigoDeBarra($codigoDeBarra);
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->stock = $stock;
        $this->precio = $precio;
        $this->id = rand(1, 10000);    
    }

    /**
     * Valida el código de barra recibido para setearlo en 6 dígitos, si recibe menos los completa con 0 a la izq, si recibe más recorta el excedente
     */
    public function ValidacionCodigoDeBarra($codigoDeBarra) {

        $auxArray = str_split($codigoDeBarra);

        if(count($auxArray) == 6) {

            return $codigoDeBarra;

        } else if (count($auxArray) < 6) {

            while(count($auxArray) < 6) {
                array_unshift($auxArray, '0');
            }

        }else {

            while(count($auxArray) > 6) {
                array_pop($auxArray);
            }
        }

        return implode($auxArray);
    }

    public static function AgregarProducto($producto, $listaProductos) {

        $ubicacion = __DIR__."/../Producto/productos.json";
        $operacion = 0;
        
        if(!file_exists($ubicacion)) {
            
            $archivo = fopen($ubicacion, "w");
            fclose($archivo);
        }

        if(!Producto::ValidarExistencia($producto, $listaProductos)) {

            array_push($listaProductos, get_object_vars($producto));
            $operacion = 1;

        } else {

            $operacion = 2;
        }

        //var_dump($listaProductos);
        
        $jsonDatos = json_encode($listaProductos, JSON_PRETTY_PRINT); 
        
        if(file_put_contents($ubicacion, $jsonDatos) > 0) {
            $resultado = true;
        }
    
        if($resultado)
            if($operacion == 1)
                echo "Ingresado\n";
            else if($operacion == 2)
                echo "Actualizado\n";
        else
            echo "No se pudo hacer\n";
    }    

    public static function ValidarExistencia($producto, &$listaProductos) {

        foreach($listaProductos as &$prod) {

            if ($producto->GetCodigo() == $prod['codigoDeBarra']) {

                var_dump($listaProductos);
                var_dump($prod);
                var_dump($prod['stock']);
                var_dump($producto->stock);

                $prod['stock'] += $producto->stock;

                echo "Sumé"; echo "\n";
                var_dump($prod['stock']);
                var_dump($producto->stock);

                return true;
            }            
        }

        return false;
    }

    /**
     * Lee todos los usuarios del archivo archivo usuarios.json
     */
    public static function LeerProductos() {

        if(file_exists(__DIR__."/../Producto/productos.json")) {

            $archivo = file_get_contents(__DIR__."/../Producto/productos.json");
            $arrayProductos = json_decode($archivo, true);
            return $arrayProductos;
        }
        else {
            return array();
        }
    }    
}