<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Seguridad y Control de Acceso</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background-color: #f4f4f4;
    }

    .hero {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .hero .btn {
      padding: 15px 30px;
      font-size: 18px;
      border-radius: 8px;
    }

    .section {
      padding: 60px 20px;
      text-align: center;
    }

    .section h2 {
      font-size: 30px;
      margin-bottom: 20px;
    }

    .section p {
      font-size: 16px;
      max-width: 800px;
      margin: auto;
    }

    footer {
      background-color: #203a43;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- Encabezado Hero -->
  <div class="hero">
    <h1>🔐 Protección de Contenido y Control de Acceso</h1>
    <p>Protege el acceso a tus sistemas con autenticación de dos factores (2FA).</p>
    <p>Evitar que el usuario copie contenido sensible</p>
    <a href="inicio.php" class="btn btn-success">Acceder al Sistema</a>
  </div>

  <!-- ¿Qué es el sistema? -->
  <div class="section">
    <h2>¿Qué es este sistema?</h2>
    <p>
      Este sistema web permite el registro, autenticación y acceso controlado de usuarios utilizando un sistema de login
      con validación 2FA por correo electrónico.
      Está diseñado como una plataforma de demostración donde la seguridad de acceso es esencial.
    </p>
  </div>

  <!-- Bloqueo de copiar, pegar y clic derecho -->
  <div class="section" style="background-color: #f9f9f9;">
    <h2>🔒 Protección de contenido: Copiar, Pegar y Clic Derecho</h2>
    <p>
      El sistema también incorpora medidas de protección para evitar que usuarios puedan copiar
      contenido sensible directamente desde la interfaz del navegador.
      Se bloquean funciones como copiar (`Ctrl+C`), pegar (`Ctrl+V`) y el clic derecho, que normalmente se usan para
      acceder a opciones como "Inspeccionar" o "Copiar código fuente".
      <br><br>
      Aunque estas medidas pueden ser evitadas por usuarios avanzados, son efectivas para disuadir accesos básicos no
      autorizados o descuidos.
    </p>
  </div>

  <!-- ¿Por qué 2FA? -->
  <div class="section" style="background-color:rgba(255, 255, 255, 0.86);">
    <h2>¿Por qué autenticación 2FA?</h2>
    <p>
      El 2FA (Two-Factor Authentication) proporciona una segunda capa de seguridad. Incluso si un atacante obtiene la
      contraseña, no podrá acceder sin el código temporal
      que se envía al correo del usuario. Esto protege contra accesos no autorizados y ataques de fuerza bruta.
    </p>
  </div>

  <!-- Beneficios -->
  <div class="section">
    <h2>Beneficios del Control de Acceso</h2>
    <p>
      🛡️ Mejora la seguridad general del sistema<br>
      👤 Control de usuarios registrados<br>
      🔒 Protección contra accesos indebidos<br>
      📧 Notificaciones por correo personalizadas (2FA)<br>
      🧩 Ideal para prácticas de ciberseguridad en cursos o instituciones
    </p>
  </div>

  <!-- Pie de página -->
  <footer>
    <p>Universidad Tecnológica de Panamá - Seguridad en Sistemas de Información | &copy; <?= date("Y") ?></p>
  </footer>

  <!-- Bootstrap 5 JS Bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
