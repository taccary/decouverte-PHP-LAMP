<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les jeux</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<p></p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Mini-Site</a>
        <div id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="page1.php">Les jeux (Requête simple)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page2.php">Les avis (Requête avec jointure)</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-5">Affichage des jeux (requete simple)</h1>
        <p class="lead">Cette page affiche des informations des jeux stockés dans la base de données. </p>
        <p>Les données sont récupérées par PHP sous la forme d'un tableau php (array). Cet ensemble de données est ensuite parcouru en PHP et affiché sous la forme d'un tableau HTML.</p>

        <!-- Récupération des jeux dans la base de données -->
        <?php
            $requete= "SELECT nom, console, prixMoyen FROM jeu ORDER BY nom"; // requête SQL à faire évoluer pour récupérer les informations de console en plus
            $query = $connexion->prepare($requete);
            $query->execute();
            // on récupère le résultat sous forme de tableau php
            $lesJeux = $query->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- Affichage du tableau des jeux -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nom du jeu</th>
                    <th>Identifiant de Console</th><!-- à modifier pour récupérer le nom de la console -->
                    <th>Prix moyen</th>
                    <!-- à compléter avec les autres colonnes -->
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($lesJeux as $unJeu) {
                        echo '<tr>';
                        echo '<td>' . $unJeu['nom'] . '</td>';
                        echo '<td>' . $unJeu['console'] . '</td>'; // à modifier pour récupérer le nom de la console
                        echo '<td>' . $unJeu['prixMoyen'] . '</td>';
                        echo '</tr>';
                        // à compléter avec les autres colonnes
                    }
                ?>
            </tbody>
        </table>
        <br>
        <!-- morceau de code pour afficher les explications -->
        <?php include 'explications/explainPage1.php'; ?>

    </div>

</body>
</html>
