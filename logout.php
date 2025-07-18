<?php
session_start();
setcookie("recordarme", "", time() - 3600, "/");

if (isset($_SESSION['usuario'])) {
    include 'conexion.php'; // Incluir el archivo de conexión
    $sql = "UPDATE usuarios SET token_recordar = NULL WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $_SESSION['usuario']);
    $stmt->execute();
}

session_destroy();
header("Location: index.php");

?>
