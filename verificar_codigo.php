<?php
session_start();

if ($_POST['codigo'] == $_SESSION['codigo_2fa']) {
    $_SESSION['autenticado'] = true;
    setcookie("usuario", $_SESSION['usuario'] ?? '', time() + 3600, "/"); // Dura 1 hora
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Código incorrecto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(120deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .error-card {
      background: rgba(255, 255, 255, 0.13);
      border-radius: 1.5rem;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(7px);
      border: 1px solid rgba(255,255,255,0.18);
      max-width: 400px;
      margin: auto;
    }
    .error-logo {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 10px;
      border-radius: 50%;
      background: #fff;
      box-shadow: 0 2px 8px rgba(44,83,100,0.2);
      padding: 8px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
      <div class="col-md-6">
        <div class="card error-card shadow-lg p-4">
          <div class="card-body text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/463/463612.png" alt="Error" class="error-logo mb-2">
            <h2 class="mb-3 text-danger fw-bold">Código incorrecto</h2>
            <p class="mb-4 text-muted">El código que ingresaste no es válido.<br>Por favor, intenta nuevamente.</p>
            <a href="verificar.html" class="btn btn-primary btn-lg rounded-pill">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
