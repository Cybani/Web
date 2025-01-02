<!DOCTYPE html>
<html lang="fr">
<div class="TouteLaPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Récapitulatif</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="titre">
                    <h1>BudgetTonPorteFeuille</h1>
                    <p>Gestionnaire de budget</p>
                </div>
                <div class="login">
                    <a href="#">user 1</a>
                </div>
                <div class="logout">
                    <a href="#">se déconnecter</a>
                </div>
            </div>
            <div class="nav">
                <h3><a href="#">Accueil</a> &nbsp; <a href="#">Depense</a> &nbsp; <a href="#">Revenu</a></h3>
            </div>
            <div class="Ariane">
                <a href="Accueil">Accueil</a> &nbsp; > &nbsp;
                <a href="Recap">Récap Décembre 2024</a>
            </div>
            <div class="warning">
                <img src="assets/img/warning.svg" alt = "warning"/>
                <a type="title"><strong>Attention fraude</strong> Ne donnez pas vos informations de paiement à des tiers non fiables.</a>
            </div>
        </header>
        <main>
            <div class="titlemain">
                <div class="border">
                    <h1>
                        Détails du mois de Décembre 2024
                    </h1>
                </div>
            </div>
            <div>
                <input type="radio" id="1 Tableau" name="tableau" value="Tableau" checked />
                <label for="1 Tableau"> 1 Tableau </label>
            </div>
            <div>
                <input type="radio" id="2 Tableau" name="tableau" value="Tableau" checked />
                <label for="2 Tableau"> 2 Tableau </label>
            </div>
            <div class="cartesRecap">
                    <div class="carteGauche">
                        <div class="obj">
                            <h1>
                                Objectif : 500€
                            </h1>
                        </div>
                        <div class="res">
                            <h2>
                                Résultat : 450€
                            </h2>
                        </div>
                        <div class="ecart">
                            <h1>
                                Écart autorisé : 100€
                            </h1>
                        </div>
                    </div>
                    <div class="carteDroite">
                        <div class="revenuMensuel">
                            <h1>
                                Revenu : 931€
                            </h1>
                        </div>
                        <div class="depensesMensuelles">
                            <h1>
                                Dépenses : 410,95€
                            </h1>
                            <h2>
                                26 Jours restants
                            </h2>
                        </div>
                    </div>
            </div>
            <div class="operations">
                <h1>Opérations comptabilisées</h1>
                <table>
                    <tr>
                        <td> Opérations </td>
                        <td>
                            Date
                        </td>
                        <td> Lieu </td>
                        <td>Description</td>
                        <td> Dépenses</td>
                        <td> Revenus</td>
                    </tr>
                    <tl>
                        <td> 1 </td>
                        <td> 01/12/24 </td>
                        <td> Fnac </td>
                        <td> Achat d'un téléphone </td>
                        <td class="depenses"> 20€</td>
                        <td class="revenus">&nbsp;</td>
                    </tl>
                    <tr>
                        <td> 2 </td>
                        <td> 01/12/24 </td>
                        <td> 3iL </td>
                        <td> Salaire </td>
                        <td class="depenses"> &nbsp; </td>
                        <td class="revenus"> 250€ </td>
                    </tr>
                </table>
            </div>
            <div class="sections">
                <div class="section1">
                    <div>
                        <h1>Résummé du mois de Décembre 2024</h1>
                        <h2>Objectif : 500€</h2>
                        <h2>Résultat actuel : 450€</h2>
                        <h2>Écart autorisé : 100€</h2>
                        <h2>Jours restants : 26</h2>
                    </div>
                </div>
                <div class="section2">
                    <h1>Details financiers </h1>
                    <h2>Total des revenus : 950€</h2>
                    <h2>Total des dépenses : 20€</h2>
                    <h2>Balance nette : 930€</h2>
                </div>
                <div class="section3">
                    <h1>Liste des opérations comptabilisées :</h1>
                    <table>
                        <tr>
                            <td>Date</td>
                            <td>Lieu</td>
                            <td>Description</td>
                            <td>Type</td>
                            <td>Dépense</td>
                        </tr>
                        <tr>
                            <td>30/11/24</td>
                            <td>Limoges</td>
                            <td>Cinema</td>
                            <td>Loisir</td>
                            <td class="depenses">-15€</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>Date</td>
                            <td>Lieu</td>
                            <td>Description</td>
                            <td>Type</td>
                            <td>Revenu</td>
                        </tr>
                        <tr>
                            <td>01/11/24</td>
                            <td>Limoges</td>
                            <td>Anniversaire</td>
                            <td>Loisir</td>
                            <td class="revenus">100€</td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
        <footer>
            <div class="GestionBudget">
                <h2>
                    Gestion Mon Budget du mois :
                </h2>
                <div class="Octobre">
                    <a href="#">Octobre 2024</a>
                </div>
            </div>
            <div class="BasDePage">
                <p>Accessibilité : non conforme &nbsp; | &nbsp; Mentions légales &nbsp; | &nbsp; Données personnelles &nbsp; | &nbsp; Conditions Générales d'Utilisation &nbsp; | &nbsp; Gestion des cookies &nbsp; | &nbsp; Plan du site</p>
            </div>
        </footer>
    </body>

</div>