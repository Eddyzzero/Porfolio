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
        <a href="./index.html"><p>Jhon Florez</p></a>
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
    <!--Formulaire de contact-->
    <section class="formulaire">
        <form action="submit.php" method="POST"></form>
        <label for="fname">Nom</label>
        <input type="text" id="fname" name="firstName" placeholder="Votre nom" required>
        <label for="lname">Prénom</label>
        <input type="text" id="lname" name="LasttName" placeholder="Votre prénom" required>
        <label for="email">Email</label>
        <input type="text" id="emai" name="firstName" placeholder="Votre nom">
        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Votre message"></textarea>
        <div class="button">
            <a href="">Envoyer</a>
        </div>
    </section>
</body>
</html>