<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formulaire.css">
    <title>Jhon Florez</title>
</head>
<body>

    <!-- header jhon florez -->
    <div class="header-jhon">
        <a href="./index.php"><p>Acceuil</p></a>
    </div>

    <!-- text de contact -->
    <section class=" container-text-contact">
        <div class="text-contact">
            <p>je vous recontacte</p>
            <div class="plus-vite">
                <p>au plus vite!</p>
            </div>
        </div>
    </section>

    <!-- verification de message envoyé -->
    <?php include('./contact.php') ?>
    <!--Formulaire de contact-->
    <section class="formulaire">
        <form method="POST">
            <label for="fname">Nom</label>
            <input type="text" id="fname" name="nom" placeholder="Votre nom" required>
            <label for="lname">Prénom</label>
            <input type="text" id="lname" name="prenom" placeholder="Votre prénom" required>
            <label for="email">Email</label>
            <input type="text" id="email" name="mail" placeholder="example@gmail.com">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Votre message"></textarea>
            <div class="button">
                <input type="submit" name="submit">
            </div>
        </form>
    </section>

    <!-- footer -->
    <footer>
        <div class="container-footer">
            <p> Version 2024</p>
            <div class="icons-social">
                <a href="https://www.instagram.com/jhon__florez/" target="_blank">
                    <img src="./assets/icons/instagram.svg" alt="instagram">
                </a>
                <a href="https://www.linkedin.com/in/jhon-florez-102aa82b3/" target="_blank">
                    <img src="./assets/icons/linkedin.svg" alt="linkedin">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100087910940662" target="_blank">
                    <img src="./assets/icons/square-facebook.svg" alt="facebook">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>