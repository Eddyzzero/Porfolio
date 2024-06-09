
<?php
if (isset($_FILES['photo']['tmp_name'])) {
    $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
    if($retour) {
        echo '<p>La photo a bien été envoyée.</p>';
        echo '<img src="' . $_FILES['photo']['name'] . '">';
        echo '<form method="post">';
        echo '<input type="hidden" name="delete_photo" value="' . $_FILES['photo']['name'] . '">';
        echo '<input type="submit" value="Supprimer la photo">';
        echo '</form>';
    }
}

// Suppression de la photo si demandé
if (isset($_POST['delete_photo'])) {
    $photo_a_supprimer = $_POST['delete_photo'];
    if (file_exists($photo_a_supprimer)) {
        unlink($photo_a_supprimer);
        echo '<p>La photo a été supprimée.</p>';
    } else {
        echo '<p>La photo n\'existe pas.</p>';
    }
}
?>
