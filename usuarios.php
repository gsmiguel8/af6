<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios de la app</title>
</head>

<body>
    <h1>Lista de usuarios</h1>
    <?php
    require_once("funciones.php");
    $archivo = "usuarios.txt";
    mostrarUsuarios($archivo);
    ?>
    <a href="index.html">Volver al inicio</a>;
</body>

</html>