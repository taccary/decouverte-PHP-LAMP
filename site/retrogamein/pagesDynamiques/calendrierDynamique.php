<?php
/* formatage des dates en français */
$fmt = new IntlDateFormatter(
	'fr_FR',
	IntlDateFormatter::FULL,
	IntlDateFormatter::NONE
);
$date_debut = '2026-11-01'; // date de début pour la requete SQL
$date_fin = '2026-12-31'; // date de fin pour la requete SQL
$lesEvenements = array(); // initialisation du tableau qui contiendra les événements récupérés depuis la base de données

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
 * Aide : Pour obtenir le même rendu que sur la page calendrier.php, copiez le code HTML d'une carte existante de la page calendrier.php et remplacez les valeurs statiques par des appels (echo) aux variables contenant les données de chaque événement.
 */

foreach ($lesEvenements as $evenement) {
	$date_debut = new DateTime($evenement['dateDebut']);
	$date_fin = new DateTime($evenement['dateFin']);
	$formatted_date_debut = $fmt->format($date_debut);
	$formatted_date_fin = $fmt->format($date_fin);

	// Affichage de la carte Bootstrap pour chaque événement
?>
	<!-- Exemple de carte Bootstrap pour un événement completement statique. Comme elle est dans la boucle, cette carte s'affichera autant de fois que d'événements dans le tableau $lesEvenements -->
	<div class="card mb-3 article">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="https://www.rom-game.fr/multimedia/agendaM/l-etrange-noel-des-sorciers-bron-20260921-184712.webp" class="card-img" alt="Affiche L&#039;étrange noël des sorciers - Yggdrasil 2026">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">L&#039;étrange noël des sorciers - Yggdrasil 2026</h5>
					<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 31 octobre - 15 novembre 2026</small></p>
					<p class="card-text">L'Étrange Noël des Sorciers rouvre la Ruelle Enchantée au Fort de Bron les 31 octobre, 1er, 14 et 15 novembre 2026.</p>
					<a href="https://www.rom-game.fr/agenda/7117-l+etrange+noel+des+sorciers.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
				</div>
			</div>
		</div>
	</div>

<?php
}
?>