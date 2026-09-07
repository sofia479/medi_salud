<?php

include("conexion.php");

if (isset($_POST["entrar"])) {

    $correo = $_POST["correo"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuario 
            WHERE correo='$correo' 
            AND password='$password'";

    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {

        echo "Inicio de sesión correcto";

    } else {

        echo "Correo o contraseña incorrectos";

    }

}

?>

<h1>Iniciar sesión</h1>

<form method="POST">

    Correo:
    <input type="email" name="correo">

    <br><br>

    Contraseña:
    <input type="password" name="password">

    <br><br>

    <input type="submit" name="entrar" value="Iniciar sesión">

</form>

<br>

<a href="registro.php">Registrarse</a>

<br>

<a href="index.php">Volver al inicio</a>