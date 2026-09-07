<?php

$conexion = new mysqli("localhost", "root", "", "clinica");

if ($conexion->connect_error) {
    die("No se pudo conectar");
}

?>