<?php
$adminPagina = basename($_SERVER['PHP_SELF'] ?? '');

if (!isset($tituloPlataforma)) {
    $tituloPlataforma = 'Plataforma Profesor - Videos con IA';
}

if (!isset($subtituloPlataforma)) {
    $subtitulos = [
        'homeAdmin.php' => 'Mira el estado general de la plataforma',
        'perfil.php' => 'Revisa y ajusta tu perfil',
        'tabla.php' => 'Consulta docentes, alumnos y cursos',
        'formacion.php' => 'Administra el contenido formativo',
        'modelosPrompt.php' => 'Revisa los modelos de prompts',
        'curso1.php' => 'Mira el curso uno',
        'curso2.php' => 'Mira el curso dos',
        'cerrarSession.php' => 'Cierre seguro de sesión',
        'login.php' => 'Acceso al panel administrativo',
    ];

    $subtituloPlataforma = $subtitulos[$adminPagina] ?? 'Gestiona tu espacio administrativo';
}

if (!isset($badgePlataforma)) {
    $badgePlataforma = 'Bienvenido Profesor: ' . ($_SESSION['docente'] ?? ($_SESSION['usuario'] ?? ''));
}
?>
<header>
    <div class="logo-container">
        <div class="header-logo-wrap">
            <img src="/ask/logo/logo.png" alt="Logo de la plataforma" class="header-logo">
        </div>
        <div class="header-copy">
            <h1><?php echo htmlspecialchars($tituloPlataforma, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?php echo htmlspecialchars($subtituloPlataforma, ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="welcome-box">
                <?php echo htmlspecialchars($badgePlataforma, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </div>
    </div>
</header>

<nav>
    <?php include __DIR__ . '/menuAdmin.html'; ?>
</nav>
