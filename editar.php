<?php
require_once '../config/conexion.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo      = $_POST['titulo'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';

    if (!empty($titulo)) {
        $sql = "UPDATE recetas SET titulo = :titulo, descripcion = :descripcion WHERE id_receta = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo'      => $titulo,
            ':descripcion' => $descripcion,
            ':id'          => $id
        ]);
        header('Location: index.php?status=updated');
        exit;
    }
}

$stmt = $pdo->prepare("SELECT * FROM recetas WHERE id_receta = :id");
$stmt->execute([':id' => $id]);
$item = $stmt->fetch();

if (!$item) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Receta - Cooking W.M</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="container py-4">
    <h2 class="mb-4">Editar Receta</h2>
    <form action="editar.php?id=<?= $item['id_receta'] ?>" method="POST">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= htmlspecialchars($item['titulo']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?= htmlspecialchars($item['descripcion']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Receta</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>