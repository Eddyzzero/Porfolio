<?php 
// Inclure le fichier de configuration pour la connexion à la base de données
include './app/config.php';
/*
 * Mise à jour du contenu d'une note dans le fichier
 * 
 * @param mixed $note_record 
 * @return int|false 
 */

// Récupérer les données de la base de données
$sql = "SELECT * FROM projets";
$stmt = $pdo->query($sql);
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convertir les données en JSON
$jsonData = json_encode($projects);

/**
 * Charger le contenu d'une note au départ du fichier passé en paramètre
 * 
 * @param mixed $file 
 * @return array|false 
 */
function LOADNoteFromFile($projects) {
    // Si le fichier n'existe pas
    if (!file_exists($projects)) {
        return false;
    }

    // Chargement de la note
    $note = json_decode(file_get_contents($projects), true);
    
    // Retourne la première note trouvée
    return $note[0];
}

/**
 * Mise à jour du contenu d'une note dans le fichier
 * 
 * @param mixed $note_record 
 * @return int|false 
 */
function UPDATENoteFile($note_record) {
    $file = $note_record['file'];
    $note = [
        'title' => $note_record['title'],
        'link' => $note_record['link'],
    ];

    $result = file_put_contents($file, json_encode([$note]));

    return $result;
}
?>
