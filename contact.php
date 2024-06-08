<?php 

// verifier si la personne remplis les infos demandeés 
if(isset($_POST['submit'])){
    if((empty($_POST['nom'])) || (empty($_POST['prenom'])) || ((empty($_POST['mail']))) || ((empty($_POST['message'])))) 
    {
        echo "<p class = 'infos'>veillez remplir les champs</p>";
    } else {
        $nom  = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['mail'];
        $message = $_POST['message'];

        $destinataire = "jhon.florezr@gmail.com";
        $sujet = 'sujet de l\'email';

        $contenu = "<html><body><p>$nom</p><p>$prenom</p><p>$email</p><p>$message</p></body></html>";
        
        $headers = "from:'.$destinataire\n";
        $headers .= "content-type:text/html; charset = 'UTF-8'";

        mail($destinataire, $sujet, $contenu, $headers);
    }

    echo "<p class = 'success'>votre message a bien été envoyé</p>";
}

?>