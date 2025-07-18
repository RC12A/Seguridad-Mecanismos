<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header('Location: index.html');
    exit;
}
?>

<h2>Bienvenido, <?= $_SESSION['usuario'] ?>!</h2>
<p>Has pasado la autenticación 2FA correctamente.</p>
<a href="logout.php">Cerrar sesión</a>
