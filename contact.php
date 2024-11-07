<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContact.css">
    <title>La Boîte Noire - Contact</title>
    <link rel="icon" type="image/x-icon" href="ressources/images/icons8-restaurant-64.png">
    <script src="app.js" defer></script>
</head>

<body>

    <header class="burgerMenu">
        <div id="mySideNav" class="sideNav">
            <a id="closeBtn" href="#" class="close">×</a>
            <ul>
              <li><a class="burgerA" href="index.html">Accueil</li></a>
              <li><a class="burgerA" href="histoire.html">Notre Histoire</a></li>
              <li><a class="burgerA" href="menu.html">Nos Menus</a></li>
              <li><a class="burgerA" href="reserver.html">Réserver</a></li>
              <li><a class="burgerA" href="contact.php">Contact</a></li>
            </ul>
          </div>
          
          <a href="#" id="openBtn">
            <div class="burgerIcon">
                <img src="ressources/images/burgerIcon.png" alt="Menu déroulant Icon, cliquez pour activez le menu sur votre gauche" width="45px">
            </div>
          </a>
    </header>
    
    

    <section class="contact">
        <div class="DivLogoImg">
            <a href="index.html">
                <img class="LogoImg" src="ressources/images/MicrosoftTeams-image (36).png" alt="Logo La Noite Noire">
            </a>
        </div>
        <h1 class="bigTitle">Nous Contacter</h1>
        <div class="contactLieu">
            <div class="contactLieuMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.5667471862635!2d3.0675181000000005!3d50.6351648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58941cbf8df%3A0x9486eb65d5dd57d7!2s57%20Rue%20Pierre%20Mauroy%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1703153481134!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contactLieuInfos">
                <div class="contactLieuInfosHoraires">
                    <h3 class="title">Nos Horaires</h3>
                    <p class="text">Lundi : Fermé <br> Mardi : 11h - 15h / 18h30 - 22h <br> Mercredi : 11h - 15h / 18h30 - 22h<br> Jeudi : 11h - 15h / 18h30 - 22h<br> Vendredi : 11h - 15h / 18h30 - 22h<br> Samedi : 11h - 15h / 18h30 - 23h<br> Dimanche : 11h - 15h / 18h30 - 23h</p>
                </div>
                <div class="contactLieuInfosCoordonnees">
                    <h3 class="title">Nos Coordonnées</h3>
                    <p class="text">ADRESSE : 57 RUE PIERRE MAUROY, 59000 - LILLE</p>
                    <p class="text">TELEPHONE : 03 25 41 98 67</p>
                </div>
            </div>
        </div>
        <div class="contactRetrouver">
            <div class="contactRetrouverInfos">
                <h3 class="title">Nous Retrouver</h3>
                <div class="contactRetrouverContentDiv">
                    <img class="iconContactRetrouver" src="ressources/images/train.png" alt="Icon de train" width="60px">
                    <p class="text">EN TRAIN : 5 minutes à pied des gares</p>
                </div>
                <div class="contactRetrouverContentDiv">
                    <img class="iconContactRetrouver" src="ressources/images/velo.png" alt="Icon de vélo" width="60px">
                    <p class="text">EN V'LILLE : 5 minutes à pied de la station</p>
                </div>
                <div class="contactRetrouverContentDiv">
                    <img class="iconContactRetrouver" src="ressources/images/voiture.png" alt="Icon de train" width="60px">
                    <p class="text">EN VOITURE : Parking de la Gare :
                        à 5 minutes</p>
                </div>
            </div>
            <div class="contactRetrouverForm">
                <h3 class="title">Une demande ?</h3>
                <form method="post">
                    <input type="text" name="nom" placeholder="Votre Nom" required>
                    <input type="email" name="email" placeholder="Votre e-mail" required>
                    <input type="text" name="sujet" placeholder="Sujet du Message">
                    <textarea name="message" placeholder="Votre Message" cols="6" required></textarea>
                    <input type="submit" value="Envoyer" class="submit">
                </form>
        
                <?php
                if (isset($_POST["message"])){
                    $message = "Ce message a été envoyé via le site leroux.alwaysdata.net
                    Nom : " . $_POST["nom"] . "
                    Email : " . $_POST["email"] . "
                    Message : " . $_POST["message"];
        
                    $retour = mail("laboitenoire.lille@gmail.com", $_POST["sujet"], $message, "From:laboitenoire.lille@gmail.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
                    if ($retour) {
                        echo "<p class='text'>L'email a été envoyé avec succés.</p>";
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footerAccueil">
            <div class="footerAccueilReseaux">
                <a target="_blank" href="https://www.instagram.com/laboitenoire_lille/"><img src="ressources/images/insta.png" alt="Aller vers notre instagram, logo d'instagram" width="30px"> </a>
                <a target="_blank" href="https://www.threads.net/@laboitenoire_lille"><img src="ressources/images/threads.png" alt="Aller vers notre Threads, logo de Threads" width="30px"></a>
                <a target="_blank" href="https://www.facebook.com/"><img src="ressources/images/facebook.png" alt="Aller vers notre Facebook, logo de Facebook" width="30px"></a>
            </div>
            <a href="mentions.html" class="boutonMentionsLegales" style="color:white">Mentions légales</a>
        </div>
    </footer>

</body>

</html>