<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluir el archivo de conexión

// Recoger datos del formulario
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = password_hash($_POST['clave'], PASSWORD_DEFAULT); // Cifrado seguro

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (usuario, correo, clave) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $usuario, $correo, $clave);

if ($stmt->execute()) {
    echo '<div style="padding:20px; background:#e6ffed; border:1px solid #b2f2bb; border-radius:8px; color:#155724; max-width:400px; margin:40px auto; text-align:center;">';
    echo '<h2 style="margin-top:0;">✅ ¡Registro exitoso!</h2>';
    echo '<p>El usuario ha sido registrado correctamente.</p>';
    echo '<a href="inicio.php" style="display:inline-block; margin-top:15px; padding:8px 18px; background:#38d39f; color:#fff; text-decoration:none; border-radius:5px;">Ir al login</a>';
    echo '</div>';
} else {
    echo '<div style="padding:20px; background:#ffe6e6; border:1px solid #f5c6cb; border-radius:8px; color:#721c24; max-width:400px; margin:40px auto; text-align:center;">';
    echo '<h2 style="margin-top:0;">❌ Error en el registro</h2>';
    // echo '<p>' . htmlspecialchars($stmt->error) . '</p>';
    echo '<a href="inicio.php" style="display:inline-block; margin-top:15px; padding:8px 18px; background:#e55353; color:#fff; text-decoration:none; border-radius:5px;">Ir al login</a>';
    echo '</div>';
}

$stmt->close();
$conexion->close();
?>
