<?php
// =========================================================================
// 1. LÓGICA DEL FORMULARIO GET (Búsqueda rápida de recetas)
// =========================================================================
$recetas_disponibles = [
    ['titulo' => 'Torrejas Dulces Caseras', 'categoria' => 'Recetas Dulces', 'autor' => 'Povi_YT'],
    ['titulo' => 'Trufas riquísimas de Chocolate', 'categoria' => 'Recetas Dulces', 'autor' => 'Morena_23'],
    ['titulo' => 'Pollo al Curry Express', 'categoria' => 'Recetas Saladas', 'autor' => 'Jiselli-herrera'],
    ['titulo' => 'Pasta a la Carbonara Tradicional', 'categoria' => 'Recetas Saladas', 'autor' => 'andreaquintana'],
    ['titulo' => 'Bowl de Salmón y Palta', 'categoria' => 'Recetas Saludables', 'autor' => 'Marcos_antonio'],
    ['titulo' => 'Ensalada de Garbanzos Fresca', 'categoria' => 'Recetas Saludables', 'autor' => 'Hong_shualin']
];

$termino_busqueda = '';
$resultados_busqueda = $recetas_disponibles;

if (isset($_GET['buscar'])) {
    // Sanitización estricta de entrada GET (Anti XSS)
    $termino_busqueda = htmlspecialchars(trim($_GET['buscar']), ENT_QUOTES, 'UTF-8');
    
    if (!empty($termino_busqueda)) {
        $resultados_busqueda = array_filter($recetas_disponibles, function($receta) use ($termino_busqueda) {
            return stripos($receta['titulo'], $termino_busqueda) !== false || 
                   stripos($receta['categoria'], $termino_busqueda) !== false;
        });
    }
}

// =========================================================================
// 2. LÓGICA DEL FORMULARIO POST (Inscripción a Cursos con Validación y Persistencia)
// =========================================================================
$errores = [];
$mensaje_exito = '';

// Variables para persistencia de datos en caso de error
$nombre_persistente = '';
$correo_persistente = '';
$curso_persistente  = 'Pastelería Saludable';
$nivel_persistente  = 'principiante';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar_inscripcion'])) {
    // Captura y sanitización estricta de entradas POST
    $nombre_raw = trim($_POST['nombre'] ?? '');
    $correo_raw = trim($_POST['correo'] ?? '');
    $curso_raw  = trim($_POST['curso'] ?? '');
    $nivel_raw  = trim($_POST['nivel'] ?? '');

    // Guardamos los datos sanitizados para devolverlos al formulario si hay error (Persistencia)
    $nombre_persistente = htmlspecialchars($nombre_raw, ENT_QUOTES, 'UTF-8');
    $correo_persistente = htmlspecialchars($correo_raw, ENT_QUOTES, 'UTF-8');
    $curso_persistente  = htmlspecialchars($curso_raw, ENT_QUOTES, 'UTF-8');
    $nivel_persistente  = htmlspecialchars($nivel_raw, ENT_QUOTES, 'UTF-8');

    // Validación en servidor: Campos requeridos no vacíos
    if (empty($nombre_raw)) {
        $errores[] = "El campo Nombre Completo es obligatorio.";
    } elseif (strlen($nombre_raw) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres.";
    }

    // Validación de formato de correo electrónico
    if (empty($correo_raw)) {
        $errores[] = "El Correo Electrónico es obligatorio.";
    } elseif (!filter_var($correo_raw, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido (ej: usuario@dominio.com).";
    }

    if (empty($curso_raw)) {
        $errores[] = "Debes seleccionar un curso válido.";
    }

    // Si no hay errores, procesamos con éxito y limpiamos los campos
    if (empty($errores)) {
        $mensaje_exito = "¡Inscripción exitosa, <strong>{$nombre_persistente}</strong>! Te has registrado en el curso de <strong>{$curso_persistente}</strong> (Nivel: {$nivel_persistente}). Enviamos los detalles a <strong>{$correo_persistente}</strong>.";
        
        // Limpiar persistencia tras el envío exitoso
        $nombre_persistente = '';
        $correo_persistente = '';
        $curso_persistente  = 'Pastelería Saludable';
        $nivel_persistente  = 'principiante';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 5: Formularios POST/GET y Seguridad XSS | Cooking W.M</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #000;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border: 3px solid #000;
            box-shadow: 6px 6px 0px #ff4d6d;
            padding: 25px;
        }
        h1, h2 {
            font-family: 'Arial Black', sans-serif;
            border-bottom: 3px solid #000;
            padding-bottom: 8px;
        }
        .box {
            background: #fdf2f4;
            border: 2px solid #000;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 4px 4px 0px #000;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-family: 'Arial Black', sans-serif;
            font-size: 14px;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            border: 2px solid #000;
            border-radius: 4px;
            font-size: 15px;
            box-sizing: border-box;
        }
        .btn {
            background: #ffe5ec;
            border: 2px solid #000;
            padding: 10px 20px;
            font-family: 'Arial Black', sans-serif;
            font-size: 15px;
            cursor: pointer;
            box-shadow: 3px 3px 0px #000;
            text-decoration: none;
            color: #000;
            display: inline-block;
        }
        .btn:hover {
            background: #ffccd5;
        }
        .alert-error {
            background: #ffadad;
            border: 2px solid #000;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }
        .alert-success {
            background: #a3f7bf;
            border: 2px solid #000;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }
        .receta-card {
            background: #fff;
            border: 2px solid #000;
            padding: 12px;
            margin-top: 10px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>Cooking W.M - Procesamiento PHP (Clase 5)</h1>
        <a href="../index.php" class="btn">&larr; Volver al Inicio</a>
    </div>

    <!-- ================================================================= -->
    <!-- MÓDULO 1: FORMULARIO GET (Búsqueda de Recetas)                    -->
    <!-- ================================================================= -->
    <section class="box">
        <h2>🔍 Buscador de Recetas (Método GET)</h2>
        <form action="index.php" method="GET" style="display: flex; gap: 10px; margin-bottom: 15px;">
            <input type="text" name="buscar" placeholder="Ej: Torrejas, Pollo, Saludables..." value="<?= $termino_busqueda ?>">
            <button type="submit" class="btn">Buscar</button>
            <?php if (!empty($termino_busqueda)): ?>
                <a href="index.php" class="btn" style="background: #e0e0e0;">Limpiar</a>
            <?php endif; ?>
        </form>

        <?php if (!empty($termino_busqueda)): ?>
            <p>Mostrando resultados para: <strong>"<?= $termino_busqueda ?>"</strong></p>
        <?php endif; ?>

        <?php if (count($resultados_busqueda) > 0): ?>
            <?php foreach ($resultados_busqueda as $receta): ?>
                <div class="receta-card">
                    <strong><?= htmlspecialchars($receta['titulo']) ?></strong> — 
                    <span>Categoría: <?= htmlspecialchars($receta['categoria']) ?></span> | 
                    <small>Chef: <?= htmlspecialchars($receta['autor']) ?></small>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No se encontraron recetas que coincidan con tu búsqueda.</p>
        <?php endif; ?>
    </section>

    <!-- ================================================================= -->
    <!-- MÓDULO 2: FORMULARIO POST (Inscripción con Validación y Persistencia) -->
    <!-- ================================================================= -->
    <section class="box" style="background: #fff;">
        <h2>📝 Inscripción a Cursos de Cocina (Método POST)</h2>
        <p>Completa el formulario. Si dejas campos vacíos o pones un correo inválido, el servidor validará los datos y conservará lo que ya escribiste.</p>

        <!-- Retroalimentación de Errores -->
        <?php if (!empty($errores)): ?>
            <div class="alert-error">
                <strong>⚠️ Por favor corrige los siguientes errores:</strong>
                <ul style="margin: 8px 0 0 0;">
                    <?php foreach ($errores as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Retroalimentación de Éxito -->
        <?php if (!empty($mensaje_exito)): ?>
            <div class="alert-success">
                ✅ <?= $mensaje_exito ?>
            </div>
        <?php endif; ?>

        <!-- Formulario POST (Sin 'required' en HTML para que puedas probar la validación del servidor en vivo) -->
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="curso">Selecciona tu Curso de Cocina</label>
                <select id="curso" name="curso">
                    <option value="Pastelería Saludable" <?= $curso_persistente === 'Pastelería Saludable' ? 'selected' : '' ?>>Curso: Pastelería Saludable</option>
                    <option value="Cocina Express" <?= $curso_persistente === 'Cocina Express' ? 'selected' : '' ?>>Curso: Cocina Express</option>
                    <option value="Cocina Internacional" <?= $curso_persistente === 'Cocina Internacional' ? 'selected' : '' ?>>Curso: Cocina Internacional</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellido" value="<?= $nombre_persistente ?>">
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="text" id="correo" name="correo" placeholder="ejemplo@correo.com" value="<?= $correo_persistente ?>">
            </div>

            <div class="form-group">
                <label for="nivel">Nivel de experiencia</label>
                <select id="nivel" name="nivel">
                    <option value="principiante" <?= $nivel_persistente === 'principiante' ? 'selected' : '' ?>>Principiante</option>
                    <option value="intermedio" <?= $nivel_persistente === 'intermedio' ? 'selected' : '' ?>>Intermedio</option>
                    <option value="avanzado" <?= $nivel_persistente === 'avanzado' ? 'selected' : '' ?>>Avanzado</option>
                </select>
            </div>

            <button type="submit" name="enviar_inscripcion" class="btn" style="width: 100%; background: #a3f7bf;">Confirmar Inscripción</button>
        </form>
    </section>
</div>

</body>
</html>