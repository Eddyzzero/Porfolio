<?php
// Inclure le fichier de configuration pour la connexion à la base de données
include './app/config.php';

// Vérifier et assigner l'ID du projet depuis la requête GET
$project_id = $_GET['id'] ?? '';

// Assurez-vous que l'ID n'est pas vide avant d'exécuter la requête
if (!empty($project_id)) {
    // Préparer et exécuter la requête SQL pour récupérer les données du projet
    $sql = "SELECT * FROM projets WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$project_id]);
    $projects = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifiez si le projet a été trouvé
    if ($projects) {
        // Convertir les données du projet en JSON
        echo json_encode($projects);
    } else {
        // Renvoyer une réponse JSON indiquant que le projet n'a pas été trouvé
        echo json_encode(['error' => 'Projet non trouvé']);
    }
} else {
    // Renvoyer une réponse JSON indiquant que l'ID est manquant
    echo json_encode(['error' => 'ID manquant']);
}
?>
