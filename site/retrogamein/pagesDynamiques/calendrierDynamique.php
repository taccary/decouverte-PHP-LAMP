<?php
/* formatage des dates en français */
$fmt = new IntlDateFormatter(
	'fr_FR',
	IntlDateFormatter::FULL,
	IntlDateFormatter::NONE
);
$date_debut = '2026-11-01'; // date de début pour la requete SQL
$date_fin = '2026-12-31'; // date de fin pour la requete SQL


/* code à ecrire PARTIE 1 :
 * ecriture et execution de la requete SQL préparée et parametrée pour récupérer toutes les données des enregistrements de la table calendrier ayant lieu entre les deux dates définies ci-dessus (incluses)., en s'inspirant des exemples de code des autres fichiers php.
 * Récupérez ensuite tous les résultats de la requête dans un tableau associatif $lesEvenements.
 */

?>

<header>
	<h1>Découvrez l'Excitation des Événements à Venir !</h1>
	<h2>Bienvenue sur la page Agenda de RetroGame'In, votre source ultime pour rester informé des événements à venir dans le monde du retrogaming.</h2>
	<p> Des conventions aux tournois, des expositions aux sorties de jeux rétro, notre agenda est le point de rendez-vous pour tous les passionnés du rétro. Ne manquez plus aucune occasion de célébrer la nostalgie du jeu vidéo. Explorez, planifiez, et plongez-vous dans l'univers passionnant des événements à venir.</p>
</header>

<?php
/**
 * code à ecrire PARTIE 2 :
 * boucle de parcours des événements récupérés depuis la base de données et affichage de chaque événement dans une carte Bootstrap en reprenant le modèle d'une des cartes HTML statique fournie dans le fichier calendrier.php. 
 * Assurez-vous d'utiliser les données récupérées depuis la base de données pour remplir les informations de chaque événement, telles que le nom, la date, le lieu, la description et le lien vers l'événement.
 * Utilisez également le formatage des dates en français pour afficher les dates de début et de fin de chaque événement.
 * exemple de formatage d'une date : $date = new DateTime('2023-10-15');
 */

?>