<!DOCTYPE html>
<html lang="fr">
<div class="TouteLaPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BudgetTonPorteFeuille</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <script src="./assets/js/prog.js"></script>
    </head>
    <body>
        <?php
        include('header.php'); 
        ?>
        <button onclick="topFunction()" id="scrollToTopButton" title="Haut de page"><i class="fas fa-chevron-up"></i></button>
        <main>
            <div class="navigate">
                <div class="accueil">
                    <a href="#">Accueil</a>&nbsp;
                </div>
                <div class="Tableau de bord">
                    &nbsp;<a href="#">Tableau de bord</a>
                </div>
            </div>
            <div class="titlemain">
                <div class="border">
                    <h1>
                        Recapitulatif des derniers mois
                    </h1>
                </div>
            </div>
            <div class="cartes">
                <div class="gauche">
                    <div class="resultat1">
                        <h3>RESULTAT: -150€</h3>
                    </div>
                    <h2>Septembre 2024</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Duis pretium non mauris non</br>commodo. Vestibulum cursus, turpis in congue<br>condimentum.</br></p>
                </div>
                <div class="milieu">
                    <div class="resultat2">
                        <h3>RESULTAT: +350€</h3>
                    </div>
                    <h2>Aout 2024</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Duis pretium non mauris non</br>commodo. Vestibulum cursus, turpis in congue<br>condimentum.</br></p>
                </div>
                <div class="droite">
                    <div class="resultat3">
                        <h3>RESULTAT: +10€</h3>
                    </div>
                    <h2>Juillet 2024</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Duis pretium non mauris non</br>commodo. Vestibulum cursus, turpis in congue<br>condimentum.</br></p>
                </div>
            </div>
            <div class="border">
                <h2>Quelles sont vos dernières dépenses ?</h2>
            </div>
            <div class="petitescartes">
                <div class="gauche">
                    <h4>Repas: 19,98€</h4>
                    <p>Restaurant Pita Pit à Limoges le 10/09/2024</p>
                </div>
                <div class="centre-gauche">
                    <h4>
                        Sortie : 19,98€
                    </h4>
                    <p>
                        Cinema pour voir le film Beattlejuice à Limoges le 10/09/24
                    </p>
                </div>
                <div class="centre-droit">
                    <h4>
                        Abonnement : 5,99€
                    </h4>
                    <p>
                        Compte Spotify comme étudiant
                    </p>
                </div>
                <div class="droite">
                    <h4>
                        Courses : 65,14€
                    </h4>
                    <p>
                        Carrefour City courses pour la semaine 05/09/2024 
                    </p>
                </div>
            </div>
        </main>
        <?php
        include('footer.php');
        ?>
</div>

    
</body>
</html>
