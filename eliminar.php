<?php
require_once '../config/conexion.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $sql = "DELETE FROM recetas WHERE id_receta = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
}

header('Location: index.php?status=deleted');
exit;
?>