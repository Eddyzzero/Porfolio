<?php
include './app/config.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];
$title = $data['title'];
$link = $data['link'];

$sql = "UPDATE projets SET title = ?, link = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute([$title, $link, $id]);

$response = [];
if ($result) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

echo json_encode($response);

// Vérifiez si le tableau $array est défini et s'il contient des éléments avant d'y accéder
if (isset($array) && !empty($array)) {
    // Accédez à un élément du tableau
    $valeur = $array[0];
    // Faites quelque chose avec $valeur
} else {
    // Gérez le cas où le tableau est nul ou vide
    echo "Le tableau est vide ou non défini";
}

?>
