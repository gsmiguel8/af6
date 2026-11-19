
<?php

$archivo = "usuarios.txt";

function comprobarUsuario($archivo, $nombre)
{
    
    if (!file_exists($archivo)) {
        return false;
    }

    $lista = file($archivo);

    foreach ($lista as $linea) {
        // Separamos la línea por el carácter "|" que use en prepararDatos() para que devuelva una cadena de cada usuario
        $datos = explode("|", $linea);
        // Comprobamos el nombre del usuario con el nombre 
        if ($datos[0] == $nombre) {
            return true; 
        } 
        
    }
    return false;
    
}



function prepararDatos($nombre, $edad, $fecha, $email, $telefono)
{
    $nombre = trim($nombre);
    $edad = trim($edad);
    $fecha = trim($fecha);
    $email = trim($email);
    $telefono = trim($telefono);

    $datos = "$nombre|$edad|$fecha|$email|$telefono\n";

    return $datos;
}




function añadirUsuario($archivo, $datos)
{
    $fp = fopen($archivo, "a");
    if ($fp){
        fwrite($fp, $datos);
        fclose($fp);
        echo "<p> Usuario registrado correctamente</p>\n";        
    }
}



function mostrarUsuarios($archivo)
{
    if (!file_exists($archivo)) {
        echo "<p>No hay usuarios registrados.</p>";
        return;
    }
    $lista = file($archivo);
    foreach ($lista as $linea){
        echo  "<p> $linea</p>\n";
    }
    
}


?>
