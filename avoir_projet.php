<?php
include './app/config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM projets WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

$project['image'] = 'path/to/images/' . $project['image'];

echo json_encode($project);
?>
