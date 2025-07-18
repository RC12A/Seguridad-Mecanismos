<?php
session_start();

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
  <title>Registro</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(120deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .registro-card {
      background: rgba(255, 255, 255, 0.13);
      border-radius: 1.5rem;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(7px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .registro-logo {
      width: 70px;
      height: 70px;
      object-fit: contain;
      margin-bottom: 10px;
      border-radius: 50%;
      background: #fff;
      box-shadow: 0 2px 8px rgba(44, 83, 100, 0.2);
      padding: 8px;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(44, 83, 100, 0.25);
      border-color: #2c5364;
    }

    .btn-primary {
      background: linear-gradient(90deg, #203a43 0%, #2c5364 100%);
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #2c5364 0%, #203a43 100%);
    }

    .card-title {
      font-weight: 700;
      letter-spacing: 1px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card registro-card shadow-lg p-4">
          <div class="card-body">
            <div class="text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Registro"
                class="registro-logo mb-2">
              <h2 class="card-title mb-4">Registro de usuario</h2>
            </div>
            <form action="registro.php" method="POST">
              <div class="mb-3">
                <label class="form-label" for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" maxlength="20" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="correo">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" maxlength="50" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="clave">Contraseña</label>
                <input type="password" name="clave" id="clave" class="form-control" maxlength="40" required />
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
              </div>
              <p class="mt-3 text-center text-white-50">
                ¿Ya tienes cuenta? <a href="login.html" class="link-light fw-bold">Inicia sesión</a>
              </p>
              <div class="mt-2 text-center">
                <a href="inicio.php" class="btn btn-outline-secondary btn-sm">Regresar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap 5 JS Bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
