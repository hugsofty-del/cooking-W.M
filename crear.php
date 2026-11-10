<?php
require_once '../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura de datos adaptada a recetas o cursos de Cooking W.M
    $titulo      = $_POST['titulo'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $precio      = $_POST['precio'] ?? 0;

    if (!empty($titulo)) {
        // Consulta Preparada obligatoria (Anti SQL Injection)
        $sql = "INSERT INTO productos (titulo, descripcion, precio) VALUES (:titulo, :descripcion, :precio)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo'      => $titulo,
            ':descripcion' => $descripcion,
            ':precio'      => $precio
        ]);
        
        header('Location: index.php?status=created');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Receta - Cooking W.M</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="container py-4">
    <h2 class="mb-4">Agregar Nueva Receta / Producto</h2>
    <form action="crear.php" method="POST">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título de la Receta</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio / Costo ($)</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Receta</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>