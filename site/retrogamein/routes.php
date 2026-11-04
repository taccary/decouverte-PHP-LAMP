<?php
	// définition de valeurs par défaut pour les variables $title, $keywords et $description qui seront utilisées pour les métadonnées dans le fichier index.php
	$title = "Titre à définir"; //Titre par défaut
	$keywords = ""; // mots clés par défaut
	$description = ""; // description par défaut

    /* choix de la valeur de la variable $affiche en fonction de parametre page transmis */
	if (!isset($_GET['page']) || $_GET['page'] == "" || $_GET['page'] == "home"){
		/* commentez le code */
		$affiche = "pagesDynamiques/presentation.php";
		$title = "Notre association";
		$keywords = "présentation, association, gaming, retro";
		$description = "Page d'accueil et de présentation de notre association";
	}
	else {
		switch ($_GET['page']) {
			case "events":
				/* commentez le code */
				$affiche = "pagesDynamiques/calendrier.php";
				$title = "Agenda des Manifestations Retro-Gaming et Jeux à Venir";
				$keywords = "Retro-Gaming, Jeux rétro, Manifestations à venir, Agenda, Événements gaming, Calendrier des jeux, Conventions gaming";
				$description = "Découvrez les prochaines manifestations et événements passionnants dans le monde du jeu et du retro-gaming. Restez à jour avec notre agenda complet.";
				break;
			case "games":
				/* commentez le code */
				$affiche = "pagesDynamiques/catalogue.php";
				break;
			case "comments":
				/* commentez le code */
				$affiche = "pagesDynamiques/commentaires.php";
				break;

			default:
				/* commentez le code */
				$affiche = "pagesDynamiques/lostinspace.php";
				$title = "Vous êtes perdus !!";
				$keywords = "404";
				$description = "page d'atterissage pour les requêtes vers des pages inexistantes";
		}
	}
