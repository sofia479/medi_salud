<?php

include("conexion.php");

if (isset($_POST["registrar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    $sql = "INSERT INTO usuario 
    (nombre, apellido, correo, password, rol, estado, fecha_registro)
    VALUES 
    ('$nombre', '$apellido', '$correo', '$password', 'paciente', 'activo', NOW())";

    $conexion->query($sql);

    echo "Usuario registrado correctamente";
}

?>

<h1>Registro de paciente</h1>

<form method="POST">

    Nombre:
    <input type="text" name="nombre">

    <br><br>

    Apellido:
    <input type="text" name="apellido">

    <br><br>

    Correo:
    <input type="email" name="correo">

    <br><br>

    Contraseña:
    <input type="password" name="password">

    <br><br>

    <input type="submit" name="registrar" value="Registrarse">

</form>

<br>

<a href="login.php">Iniciar sesión</a>

<br>

<a href="index.php">Volver al inicio</a>