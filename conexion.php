<?php
$host = "localhost";       // Servidor local
$usuario = "root";         // Usuario por defecto en XAMPP/WAMP
$clave = "";               // Contraseña vacía por defecto
$bd = "login_2fa"; // Reemplaza con el nombre real de tu base de datos

$conexion = new mysqli($host, $usuario, $clave, $bd);

// Verifica la conexión
if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
}

// Opcional: fuerza el uso de UTF-8
$conexion->set_charset("utf8");
?>
