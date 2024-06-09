<!-- recupere la db -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mon_porfolio";

// creer une connexion 
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Impossible de se connecter : " . $e->getMessage());
}

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le fichier a été téléchargé avec succès
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
        $tempFilePath = $_FILES["photo"]["tmp_name"]; // Chemin temporaire du fichier téléchargé
        $fileName = $_FILES["photo"]["name"]; // Nom du fichier téléchargé
        
        // Déplace le fichier téléchargé vers le dossier de destination
        $destinationPath = "./uploads/" . $fileName;
        move_uploaded_file($tempFilePath, $destinationPath);
        
        // Envoie l'URL du fichier téléchargé en tant que réponse JSON
        echo json_encode(array("imageUrl" => $destinationPath));
    } else {
        // Gère les erreurs de téléchargement de fichier
        echo json_encode(array("error" => "Une erreur est survenue lors du téléchargement du fichier."));
    }
} else {
    // Gère les requêtes non-POST
    echo json_encode(array("error" => "La méthode de requête n'est pas POST."));
}
?>

?>

