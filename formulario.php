<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Registro de usuarios</title>
</head>

<body>

    <h2 id="title">Registrar usuario</h2>

    <form action="formulario.php" method="POST">

        <label>Nombre y apellidos:</label><br>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Edad:</label><br>
        <input type="number" name="edad" min="1" required>
        <br><br>

        <label>Fecha de nacimiento:</label><br>
        <input type="date" name="fecha" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Teléfono:</label><br>
        <input type="tel" name="telefono" required>
        <br><br>

        <button type="submit" name="guardar">
            Guardar usuario
        </button>

    </form><br>
    <a href="index.html"> volver al inicio</a>

    <?php

    require_once("funciones.php");
    $archivo = "usuarios.txt";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $fecha = $_POST["fecha"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

    
        if (comprobarUsuario($archivo, $nombre)) {
            echo "<p>Error: El usuario ya está registrado.</p>\n";
        } else {
            $datos = prepararDatos($nombre, $edad, $fecha, $email, $telefono);
            añadirUsuario($archivo, $datos);
        }
    }
    ?>


</body>

</html>