<?php

// Comienzo de la sesión
session_start();


$usuario = "";

if(isset($_GET["usuario"])) {
    $usuario = $_GET["usuario"];   
}

if(isset($_SESSION["usuario"])){

    if($usuario != "")
        echo $_SESSION["usuario"];

} else {
    // Guardar datos de sesión
    $_SESSION["usuario"] = $usuario;
    echo 'NO estaba seteado, lo seteamos';
}

session_destroy();

?>