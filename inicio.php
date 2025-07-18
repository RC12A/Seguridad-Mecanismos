<?php
session_start();

// Revisar si ya hay sesión o cookie activa
if (isset($_SESSION['usuario']) && isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
  header("Location: dashboard.php");
  exit;
}
if (isset($_COOKIE['recordarme'])) {
  header("Location: dashboard.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      text-align: center;
      padding-top: 80px;
      background-color: #f4f4f4;
    }

    h1 {
      margin-bottom: 40px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-5">
            <div class="mb-4 text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="2FA Icon" width="70" class="mb-3">
              <h1 class="card-title fw-bold text-primary">Bienvenido</h1>
              <p class="text-muted mb-0">Sistema de Autenticación 2FA</p>
            </div>
            <div class="d-grid gap-3 mt-4">
              <a href="form_registro.php" class="btn btn-success btn-lg rounded-pill shadow-sm">
                <i class="bi bi-person-plus"></i> Registrarse
              </a>
              <a href="login.html" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
              </a>
              <a href="index.php" class="btn btn-secondary btn-sm rounded-pill mt-2">
                <i class="bi bi-arrow-left"></i> Regresar a Inicio
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Bootstrap 5 JS Bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
<?php

// Revisar si ya hay sesión o cookie activa
if (isset($_SESSION['usuario']) && isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
  header("Location: dashboard.php");
  exit;
}
if (isset($_COOKIE['recordarme'])) {
  header("Location: dashboard.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      text-align: center;
      padding-top: 80px;
      background-color: #f4f4f4;
    }

    h1 {
      margin-bottom: 40px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-5">
            <div class="mb-4 text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="2FA Icon" width="70" class="mb-3">
              <h1 class="card-title fw-bold text-primary">Bienvenido</h1>
              <p class="text-muted mb-0">Sistema de Autenticación 2FA</p>
            </div>
            <div class="d-grid gap-3 mt-4">
              <a href="form_registro.php" class="btn btn-success btn-lg rounded-pill shadow-sm">
                <i class="bi bi-person-plus"></i> Registrarse
              </a>
              <a href="login.html" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
              </a>
              <a href="index.php" class="btn btn-secondary btn-sm rounded-pill mt-2">
                <i class="bi bi-arrow-left"></i> Regresar a Inicio
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Bootstrap 5 JS Bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
