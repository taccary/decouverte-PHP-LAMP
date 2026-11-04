<?php
/* définition de valeurs par défaut pour les variables $title, $keywords et $description qui seront utilisées pour les métadonnées dans le fichier index.php */
$title = "Titre à définir"; //Titre par défaut
$keywords = ""; // mots clés par défaut
$description = ""; // description par défaut

/* On récupère le paramètre "page" envoyé par l'URL  $_GET['page'] qui contient ce que l'utilisateur a demandé (ex: ?page=events), si le paramètre existe, on le stocke dans la variable $param, sinon on définit la valeur par défaut "home" */
if (isset($_GET['page'])) {
	$pageDemandee = $_GET['page'];
} else {
	$pageDemandee = "home";
}

/* Utilisation d'une structure switch pour déterminer quelle fichier php inclure en fonction de la valeur de $pageDemandee */
switch ($pageDemandee) { /* on teste la valeur de $pageDemandee */
	case "home": /* dans le cas où la valeur de $pageDemandee est "home" la page à inclure sera pagesDynamiques/presentation.php */
		$affiche = "pagesDynamiques/presentation.php";
		$title = "Notre association";
		$keywords = "présentation, association, gaming, retro";
		$description = "Page d'accueil et de présentation de notre association";
		break;
	case "events": /* commentez le code */
		$affiche = "pagesDynamiques/calendrier.php";
		$title = "Agenda des Manifestations Retro-Gaming et Jeux à Venir";
		$keywords = "Retro-Gaming, Jeux rétro, Manifestations à venir, Agenda, Événements gaming, Calendrier des jeux, Conventions gaming";
		$description = "Découvrez les prochaines manifestations et événements passionnants dans le monde du jeu et du retro-gaming. Restez à jour avec notre agenda complet.";
		break;
	case "games": /* commentez le code */
		$affiche = "pagesDynamiques/catalogue.php";
		break;
	case "comments": /* commentez le code */
		$affiche = "pagesDynamiques/commentaires.php";
		break;
default: /* commentez le code */
		$affiche = "pagesDynamiques/lostinspace.php";
		$title = "Vous êtes perdus !!";
		$keywords = "404";
		$description = "page d'atterissage pour les requêtes vers des pages inexistantes";
}
