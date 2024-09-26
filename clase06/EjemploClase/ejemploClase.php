<?php 
$serverName = "localhost";
$port = "3306";
$userName = "root";
$password = "";

$connectionString = "mysql:host=$serverName:$port;dbname=pruebaDB";

try {    
    $pdo = new PDO($connectionString, $userName, $password);
}
catch(PDOException $e) {
    echo "Error: ".$e->getMessage();
}


class AccesoDatos {

    private static $_ObjetoAccesoDatos;
    private $_objetoPDO;

    private function __construct() {
        try {
            $this->_objetoPDO = new PDO('mysql:host=lolcalhost;dbname=clase06;charset=utf8', 'root', '', array(PDO::AT));
            $this->_objetoPDO->exec("SET CHARACTER SET utf8");
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    public function RetornarConsulta($sql) {
        
        return $this->_objetoPDO->prepare($sql);
    }

    public function RetornarUltimoIdInsertado () {
        
        return $this->_objetoPDO->lastInsertId();
    }

    /**
     * Se asegura de que exista una única instancia creada del túnel | PATRON SINGLETON
     */
    public static function dameUnObjetoAcceso() {

        if(!isset(self::$_ObjetoAccesoDatos)) {
            self::$_ObjetoAccesoDatos = new AccesoDatos();
        }
        return self::$_ObjetoAccesoDatos;
    }

    // Evita que el objeto se pueda clonar
    public function __clone() {
        
    }
}