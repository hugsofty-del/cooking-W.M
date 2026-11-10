<?php
require_once '../config/conexion.php';

// Consulta segura adaptada a tu tabla recetas
$stmt = $pdo->query("SELECT * FROM recetas ORDER BY id_receta DESC");
$registros = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración de Recetas - Cooking W.M</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="container py-4">
    <h2 class="mb-4">Administración de Recetas - Cooking W.M</h2>
    <a href="crear.php" class="btn btn-primary mb-3">Agregar Nueva Receta</a>
    <a href="../index.html" class="btn btn-secondary mb-3">Volver al Sitio Web</a>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id_receta']) ?></td>
                <td><?= htmlspecialchars($item['titulo']) ?></td>
                <td><?= htmlspecialchars($item['descripcion']) ?></td>
                <td><?= htmlspecialchars($item['imagen']) ?></td>
                <td>
                    <a href="editar.php?id=<?= $item['id_receta'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="eliminar.php?id=<?= $item['id_receta'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Confirma eliminar este registro?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>