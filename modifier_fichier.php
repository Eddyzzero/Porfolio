<?php
include './app/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['project-id'];
    $title = $_POST['title'];
    $link = $_POST['link'];

    if (empty($id)) {
        // Insérer un nouveau projet
        $sql = "INSERT INTO projets (title, description, link) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $link]);
    } else {
        // Mettre à jour un projet existant
        $sql = "UPDATE projets SET title=?, description=?, link=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $link, $id]);
    }

    header('Location: index.php');
    exit();
}


?>