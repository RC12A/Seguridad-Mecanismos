<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: inicio.php");
    exit;
}
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Empresarial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background-color: #f4f4f4;
        }

        .sidebar {
            height: 160vh;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            padding: 30px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<!-- Bloqueo de copiar, pegar y clic derecho -->

<body oncontextmenu="return false" oncopy="return false" onpaste="return false">
    <script>
        document.addEventListener('keydown', function (e) {
            if ((e.ctrlKey && (e.key === 'c' || e.key === 'v'))) {
                e.preventDefault();
                alert("⚠️ Esta acción está bloqueada por seguridad.");
            }
        });
    </script>

    <div class="container-fluid">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-3 sidebar">
                <h4 class="text-center py-4">🔐 Panel Seguro</h4>
                <a href="index.php">🏠 Paginá de Inicio</a>
                <a href="#finanzas">📊 Finanzas</a>
                <a href="#rrhh">👥 Recursos Humanos</a>
                <a href="#tecnologia">💻 Tecnología</a>
                <a href="#comunicaciones">📡 Comunicaciones</a>
                <a href="#inventario">📦 Inventario</a>
                <a href="#legal">📁 Contratos y Legal</a>
                <a href="logout.php">🚪 Cerrar sesión</a>

            </div>

            <!-- Contenido -->
            <div class="col-md-9 content">
                <h2>Bienvenido, <?= htmlspecialchars($usuario) ?></h2>
                <p class="text-muted">Has accedido a información confidencial. Las funciones de copiar, pegar y clic
                    derecho están deshabilitadas.</p>

                <!-- Finanzas -->
                <section id="finanzas">
                    <h4>📊 Finanzas</h4>
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Balance mensual:</strong> $1,250,000 en activos / $950,000 en pasivos</p>
                            <p><strong>Inversión tecnológica:</strong> $200,000 destinados al Q3</p>
                            <p><strong>Cuenta crítica:</strong> Cliente Alfa (proyecto confidencial): $120,000</p>
                        </div>
                    </div>
                </section>

                <!-- Recursos Humanos -->
                <section id="rrhh">
                    <h4>👥 Recursos Humanos</h4>
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Empleados bajo revisión:</strong> Juan Pérez, Ana Castillo, Luis Morales</p>
                            <p><strong>Salarios pendientes:</strong> $32,000 del equipo de desarrollo</p>
                            <p><strong>Evaluaciones internas:</strong> Programadas para el 15 de julio</p>
                        </div>
                    </div>
                </section>

                <!-- Tecnología -->
                <section id="tecnologia">
                    <h4>💻 Tecnología</h4>
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Licencias activas:</strong> Microsoft 365, Fortinet, Visual Studio Pro</p>
                            <p><strong>Infraestructura crítica:</strong> 5 servidores privados con backups semanales</p>
                            <p><strong>Proyectos activos:</strong> Rediseño del portal interno, migración a cloud
                                híbrida</p>
                        </div>
                    </div>
                </section>

                <!-- Comunicaciones -->
                <section id="comunicaciones">
                    <h4>📡 Comunicaciones</h4>
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Protocolos de seguridad:</strong> Política de correo cifrado, VPN obligatoria</p>
                            <p><strong>Mensajería interna:</strong> Sistema cerrado basado en Signal Protocol</p>
                            <p><strong>Alertas activas:</strong> 2 incidentes en monitoreo de red esta semana</p>
                        </div>
                    </div>
                </section>

                <!-- Inventario y Logística -->
                <section id="inventario">
                    <h4>📦 Inventario y Logística</h4>
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Almacén central:</strong> 2,150 productos almacenados</p>
                            <p><strong>Inventario en riesgo:</strong> 48 unidades vencen este mes</p>
                            <p><strong>Proveedores activos:</strong> 12, incluyendo logísticos y distribuidores</p>
                            <p><strong>Rutas de distribución:</strong> Panamá Oeste, Colón, Chiriquí</p>
                        </div>
                    </div>
                </section>


                <!-- Contratos y Legal -->
                <section id="legal">
                    <h4>📁 Contratos y Documentación Legal</h4>
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Contratos vigentes:</strong> 5 acuerdos con cláusulas de exclusividad</p>
                            <p><strong>Firmas pendientes:</strong> 2 convenios de confidencialidad</p>
                            <p><strong>Auditoría próxima:</strong> Inspección interna programada para el 28 de julio</p>
                            <p><strong>Documentos sensibles:</strong> Acuerdos con gobierno y NDA activos</p>
                        </div>
                    </div>
                </section>


                <!-- Botones de acción -->
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary" onclick="alert('🚫 Descargar restringido')">📥 Descargar
                        Informe</button>
                    <a href="logout.php" class="btn btn-outline-danger">Cerrar sesión</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
