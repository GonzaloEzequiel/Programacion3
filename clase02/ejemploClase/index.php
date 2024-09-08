<?php

echo "Clase #02\n";

// Quiero traer, crear y mostrar un usuario.

require_once "./Clases/Usuario.php";
require_once "./Clases/Empleado.php";

$usuario = new Usuario("Gonzalo", "Pérez", 33111296);
$usuario2 = new Empleado("Lomito", "Pérez", 1400);

$usuario->Mostrar();
$usuario2->Mostrar();

Usuario::MostrarCantidadUsuarios();

echo __DIR__;