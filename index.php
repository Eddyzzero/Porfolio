<?php 
include './app/config.php';
include './app/fcts-app.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <title>Jhon Florez</title>
</head>
<body>

    <section class="container-principal-un">
        <section>
        <!-- Premier texte banner -->
            <div class="container-liens reveal">
                <ul>
                    <li><a href="#mes-projects">Projects</a></li>
                    <li><a href="#informations-perso">à propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>   
            </div>
        </section>
        <!-- Deumième texte banner -->
        <section class="container-text-principal">
            <div class="container-text">
                <h1>
                    <p>Graphiste</p>
                    <p>&</p>
                    <p>Developpeur web</p>
                </h1>
            </div>
        </section>
        <!-- Trosième texte banner -->
        <section class="container-text-principal">
            <div class="container-text-petit">
                <h2>
                    <p>Hola! je suis Jhon</p>
                    <p>Développeur web et Graphiste</p>
                    <p>Belgo colombien</p>
                </h2>
            </div>
        </section>
    </section>

    <!-- deuxiéme section  -->
    <section class="container-principal-deux" id="informations-perso">
        <div class="container-infos reveal">
            <section class="container-enfant">
                <img src="./assets/img/image-porfolio.jpg" alt="image-porfolio">
                <div>
                    <p>Jhon Florez</p>
                    <p>Belgique</p>
                    <p>30ans</p>
                </div>
            </section>
            <section class="container-enfant1">
                <div>
                    <h2>Qui suis - je ?</h2>
                    <p>
                        Nationalité colombienne, résidant en Belgique depuis six ans, j'ai décidé de faire de ce pays ma résidence permanente.
                        Ayant débuté ma carrière en Colombie avec une formation de trois ans en graphisme, j'ai acquis une solide expérience dans ce domaine au fil des années.
                        Toutefois, Souhaitant également exploiter mes compétences en informatique, j'ai entrepris une reconversion professionnelle avec pour objectif une première expérience dans le domaine de la programmation. 
                        C'est ainsi que s'est concrétisée ma volonté de me spécialiser dans le développement front-end.
                    </p>
                </div>
                <div class="container-education">
                    <h2>Education</h2>
                    <div>
                        <p>Développeur front-end</p>
                        <p>IFAPME, Chateau massart liège</p>
                        <p>01 Janvier  2023 À Aujourd'hui</p>
                    </div>  
                    <div>
                        <p>Graphiste et communication  visuel</p>
                        <p>ANDAP, Manizales Colombie</p>
                        <p>Janvier 2014 - Janvier 2017</p>
                    </div>                      
                    <div>
                        <p>Photographie</p>
                        <p>Autodidacte </p>
                        <p>Depuis 2015 et toujours en apprentissage </p>
                    </div>  
                </div>
            </section>
            <!-- Partie skills -->
            <section class="container-langages">
                <div class="division">
                    <h2>Software graphisme que je Maîtrise</h2>
                    <section class="container-enfant2">
                        <div class="programmes">
                            <p>Adobe photoshop</p>
                            <p>Adobe Illustrator</p>
                            <p>Adobe Indesign</p>
                            <p>Adobe After effetcs</p>
                            <p>Figma</p>
                            <p>Adobe Lightroom</p>
                        </div>
                        <!-- Barre de progression -->
                        <div class="container-barreDProgression">

                            <div class="barreDProgression">
                                <div class=" progression" id="nine"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="seven"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="six"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="six"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="eight"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="nine"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="division">
                    <h2>Software Programmation</h2>
                    <section class="container-enfant2">
                        <div class="programmes">
                            <p>HTML</p>
                            <p>CSS</p>
                            <p>Wordpress</p>
                            <p>Javascript</p>
                            <p>PHP</p>
                            <p>Tailwind</p>
                            <p>MySQL</p>
                        </div>
                        <!-- Barre de progression -->
                        <div class="container-barreDProgression">

                            <div class="barreDProgression">
                                <div class=" progression" id="ten"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="eight"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="eight"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="four"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="four"></div>
                            </div>
                            <div class="barreDProgression">
                                <div class=" progression" id="six"></div>
                            </div>    
                            <div class="barreDProgression">
                                <div class=" progression" id="eight"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- dernière section skills -->
                <div class="division">
                    <h2>Soft skills</h2>
                    <section class="container-enfant3">
                        <div>
                            <p>Travail en équipe </p>
                            <p>Dynamique</p>
                            <p>Communication</p>
                            <p>Curieux </p>
                            <p>Sociable </p>
                            <p>Ecoute active</p>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </section>

    <!-- Première section -->
    <section class="mes-projects reveal" id="mes-projects">
        <div class="projets-enfant container-col">
            <p>mes</p>
            <p>Projects</p>
        </div>
        <div class="container-carre-projects">
            <?php foreach ($projects as $project): ?>

            <div class="container-child-projets">
                <div class="container-points">
                    <div class="point"></div>
                    <div class="point"></div>
                    <div class="point"></div>
                </div>
                <!-- affichage de l'image -->   
                 <img src="<?php echo htmlspecialchars($project['image']);?>" alt="">
                <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                <div class="container-buttons">
                    <button class="modal-trigger" data-id="<?php echo $project['id']; ?>">Modifier</button>
                    <a href="<?php echo htmlspecialchars($project['github']); ?>">GitHub</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Section modale -->
    <section>
        <div class="modal-container">
            <div class="overlay modal-trigger"></div>
            <div class="modal">
                <button class="close-modal modal-trigger"> X </button>
                <h1>Modificateur de contenu</h1>
                <form id="imageForm" method="POST" enctype="multipart/form-data">
                    <input type="file" id="photoInput" name="photo">
                    <input type="submit">
                </form>
                <div id="photoPreview"></div>
            </div>
        </div>
    </section>

    <!-- troixième Section  contact-->
    <section class="container-contact" id="contact">
        <div class="container-marges">
            <div class="container-contact-child reveal" id="contactDiv">
                    <div class="contactez-moi">
                        <p>Contactez moi</p>
                        <p>J’aurais le plasir de vous recontacter</p>
                        <p><b>cliquez ici</b></p>
                    </div>
            </div>
            <div class="container-tel-email">
                <!--Téléphone-->
                <div class="container-tel-email-child container-col position1 justify-content" >
                    <p>Telephone</p>
                    <div class="container-row ">
                        <img class="icons" src="./assets/icons/phone-solid.svg" alt="Telephone">
                        <p>(+32) 484/ 79 02 14</p>
                    </div>
                </div>
                <!--Mail-->
                <div class="container-tel-email-child container-col position2 justify-content" >
                    <p>Email</p>
                    <div class="container-row">
                        <img src="./assets/icons/enveloppe.svg" alt="">
                        <p>Jhon.florezr@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!--Footer-->
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

    <script src="./script.js"></script>
</body>
</html> 
