<?php
/* formatage des dates en français */
$fmt = new IntlDateFormatter(
	'fr_FR',
	IntlDateFormatter::FULL,
	IntlDateFormatter::NONE
);
$date_debut = '2026-11-01'; // date de début pour la requete SQL
$date_fin = '2026-12-31'; // date de fin pour la requete SQL
$lesEvenements = [['nom' => 'Événement 1', 'dateDebut' => '2026-11-01', 'dateFin' => '2026-11-01'], ['nom' => 'Événement 2', 'dateDebut' => '2026-12-01', 'dateFin' => '2026-12-31']]; // initialisation du tableau avec des données fictives. Ce tableau devra être écrasé par les données récupérées depuis la base de données

/* Code à ecrire PARTIE 1 :
 * Ecriture et execution d'une requête SQL préparée et parametrée pour récupérer toutes les données des enregistrements de la table calendrier ayant lieu entre les deux dates définies ci-dessus (incluses).
 * Inspirez-vous des exemples de code des autres fichiers php pour exécuter la requête préparée et récupérer les résultats dans le tableau associatif $lesEvenements.
 */



?>

<header>
	<h1>Découvrez l'Excitation des Événements à Venir !</h1>
	<h2>Bienvenue sur la page Agenda de RetroGame'In, votre source ultime pour rester informé des événements à venir dans le monde du retrogaming.</h2>
	<p> Des conventions aux tournois, des expositions aux sorties de jeux rétro, notre agenda est le point de rendez-vous pour tous les passionnés du rétro. Ne manquez plus aucune occasion de célébrer la nostalgie du jeu vidéo. Explorez, planifiez, et plongez-vous dans l'univers passionnant des événements à venir.</p>
</header>

<?php
/**
 * boucle de parcours du tableau lesEvenements
 */
foreach ($lesEvenements as $evenement) {
	// Création d'objets DateTime pour les dates de début et de fin de l'événement
	$date_debut = new DateTime($evenement['dateDebut']);
	$date_fin = new DateTime($evenement['dateFin']);
	// Formatage des dates en français
	$formatted_date_debut = $fmt->format($date_debut);
	$formatted_date_fin = $fmt->format($date_fin);

	/**
	 * code à ecrire PARTIE 2 :
	 * Remplacer les valeurs statiques de l'exemple de carte Bootstrap ci-dessous par les valeurs dynamiques récupérées depuis le tableau $lesEvenements.
	 * Vous pouvez utiliser les clés du tableau associatif $evenement pour accéder aux valeurs correspondantes.
	 * Pour faire des insertions dynamiques dans le code HTML, vous pouvez utiliser la syntaxe <?= $variable ?> pour afficher la valeur d'une variable PHP dans le code HTML (voir l'exemple ligne 55 pour l'information du nom de l'événement).
	 */
	// 
?>
	<!-- Comme cette carte Bootstrap est dans la boucle, elle s'affichera autant de fois que d'événements dans le tableau $lesEvenements. A vous de la compéter pour afficher les informations de chaque événement. -->
	<div class="card mb-3 article">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="https://www.rom-game.fr/multimedia/agendaM/l-etrange-noel-des-sorciers-bron-20260921-184712.webp" class="card-img" alt="Affiche L&#039;étrange noël des sorciers - Yggdrasil 2026">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title"><?= $evenement['nom'] ?></h5>
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