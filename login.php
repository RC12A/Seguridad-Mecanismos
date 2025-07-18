<?php
session_start();
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Conexión a la base de datos
include 'conexion.php'; // Incluir el archivo de conexión

// Recibir datos del formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// Buscar usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();

    // Verificar contraseña
    if (password_verify($clave, $fila['clave'])) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['correo'] = $fila['correo'];

        // Generar código 2FA
        $codigo = rand(100000, 999999);
        $_SESSION['codigo_2fa'] = $codigo;

        // Enviar correo con PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'demonalf3@gmail.com'; // email
            $mail->Password = 'miwh kyof hphz sctv';     // clave de app de Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('email@gmail.com', 'Sistema 2FA');
            $mail->addAddress($fila['correo']);
            $mail->isHTML(true);
            $mail->Subject = 'Tu código de verificación';
            $mail->Body = "Tu código de verificación es: <b>$codigo</b>";

            $mail->send();

            if (isset($_POST['recordarme'])) {
                $token = bin2hex(random_bytes(32)); // Token aleatorio seguro
                setcookie("recordarme", $token, time() + (86400 * 30), "/"); // 30 días

                // Guardar token en la base de datos
                $sql = "UPDATE usuarios SET token_recordar = ? WHERE usuario = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ss", $token, $usuario);
                $stmt->execute();
            }


            // Redirigir a formulario de verificación
            header("Location: verificar.html");
            exit;
        } catch (Exception $e) {
            echo "❌ Error al enviar el código: {$mail->ErrorInfo}";
        }
    } else {
            echo '<div style="font-family: Arial, sans-serif; margin-top: 50px; text-align: center;">
            <h2 style="color: #e74c3c;">❌ Contraseña incorrecta</h2>
            <p>La contraseña que ingresaste no es válida. Por favor, intenta nuevamente.</p>
            <a href="login.html" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #3498db; color: #fff; text-decoration: none; border-radius: 5px;">Regresar</a>
          </div>';
    }
} else {
        echo '<div style="font-family: Arial, sans-serif; margin-top: 50px; text-align: center;">
            <h2 style="color: #e74c3c;">❌ Usuario no encontrado</h2>
            <p>El Usuario que ingresaste no es existe. Por favor, intenta nuevamente.</p>
            <a href="login.html" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #3498db; color: #fff; text-decoration: none; border-radius: 5px;">Regresar</a>
          </div>';
}

$stmt->close();
$conexion->close();
?>
