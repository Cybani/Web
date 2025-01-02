<!DOCTYPE html>
<html lang="fr">
<div class="TouteLaPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Connexion</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="./assets/js/prog.js"></script>
    </head>
    <body>
        <div class="connexion">
            <div>
                <h1>
                    Connexion
                </h1>
            </div>
            <form method="get" action="">
                <p>
                    <label for="id">Nom d'Utilisateur :</label>
                    <input type="id" id="Nom d'Utilisateur" placeholder="Votre nom d'utilisateur" size="30">
                    <div class="mdp">
                        <label for="mdp">Mot de Passe :</label>
                        <input type="password" id="mdp" placeholder="Votre mot de passe" size="30">
                    </div>
                    <a href="#" id="mon-lien">Créer un compte</a>
                </p>
            </form>
        </div>
    </body>
    <main>
        <div class="créerCompte">
            <h1>
                Créer un Compte
            </h1>
            <form method="get" action="">
                <p>
                    <div class="email">
                        <label for="email">Votre email :</label>
                    <input type="text" id="email" placeholder="mon.email@gmail.com" size="30">
                    </div>
                    <div class="loginConnexion">
                        <label for="login" id="login">Nom d'Utilisateur :</label>
                    <input type="text" id="login" placeholder="Ex : Tom" size="30">
                    </div>
                    <div class="MotDePasse">
                        <label for="MotDePasse">Mot de Passe :</label>
                    <input type="password" id="MotDePasse" placeholder="Votre mot de passe" size="30">
                    </div>
                    <div class="confirmationMdp">
                        <label for="confirmationMdp">Confirmer votre mot de passe :</label>
                    <input type="password" id="confirmationMdp" placeholder="Votre mot de passe" size="30">
                    </div>
                </p>
            </form>
        </div>
    </main>
</div>