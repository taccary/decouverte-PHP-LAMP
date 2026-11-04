<?php
/* code préparé pour passer l'affichage des billets en dynamique */
    // date de début et date de fin pour la requete SQL
    $date_debut = '2021-01-01';
    $date_fin = '2021-12-31';
	// Créer des objets DateTime
	$dateDebutObj = new DateTime($date_debut);
	$dateFinObj = new DateTime($date_fin);
	// Formater les dates selon le fuseau horaire du serveur
	$formattedDateDebut = $dateDebutObj->format('Y-m-d H:i:s');
	$formattedDateFin = $dateFinObj->format('Y-m-d H:i:s');

    // En utilisant les éléments de code des requetes préparées de la page afficheUnJeu.php, écrire le code pour afficher les événements à venir entre le $formattedDateDebut et le $formattedDateFin

	// requête à trouver pour afficher les événements entre les deux dates
   
    // Préparer la requête en utilisant la connexion à la base de données

    // Définir les valeurs des paramètres en utilisant bindValue
    
    // Exécuter la requête
    
    // Récupérer tous les résultats de la requête dans un tableau associatif $lesEvenements
    
    // Fermer le curseur des résultats pour libérer les ressources

?>

<header>
    <h1>Découvrez l'Excitation des Événements à Venir !</h1>
    <h2>Bienvenue sur la page Agenda de RetroGame'In, votre source ultime pour rester informé des événements à venir dans le monde du retrogaming.</h2>
    <p>Des conventions aux tournois, des expositions aux sorties de jeux rétro, notre agenda est le point de rendez-vous pour tous les passionnés du rétro. Ne manquez plus aucune occasion de célébrer la nostalgie du jeu vidéo. Explorez, planifiez, et plongez-vous dans l'univers passionnant des événements à venir.</p>
</header>

<!-- Événement 1 : L&#039;étrange noël des sorciers - Yggdrasil 2026 -->
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

<!-- Événement 2 : Abrogeek 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/abrogeek-abrest-20260917-150547.webp" class="card-img" alt="Affiche Abrogeek 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Abrogeek 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 14 - 15 novembre 2026</small></p>
				<p class="card-text">Abrogeek investit le centre socio-culturel d'Abrest les 14 et 15 novembre 2026 : jeu vidéo, manga, comics, artisans et lasergame, entrée gratuite.</p>
				<a href="https://www.rom-game.fr/agenda/8607-abrogeek.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 3 : Horizon Japonais 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/horizon-japonais-talaudiere-20260916-224347.webp" class="card-img" alt="Affiche Horizon Japonais 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Horizon Japonais 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 14 - 15 novembre 2026</small></p>
				<p class="card-text">L'Horizon Japonais revient à La Talaudière les 14 et 15 novembre 2026, avec une édition gratuite dédiée au Japon et à la pop culture.</p>
				<a href="https://www.rom-game.fr/agenda/7852-horizon+japonaise.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 4 : Japan Game Festival 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/japan-game-festival-lyon-20261019-131349.webp" class="card-img" alt="Affiche Japan Game Festival 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Japan Game Festival 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 21 - 22 novembre 2026</small></p>
				<p class="card-text">Le Japan Game Fest 2 réunit consoles et bornes d'arcade japonaises à la salle de la Ficelle, à Lyon, les 21 et 22 novembre 2026.</p>
				<a href="https://www.rom-game.fr/agenda/8191-japan+game+festival.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 5 : Japan Touch Lyon 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/japan-touch-lyon-chassieu-20251104-000531.webp" class="card-img" alt="Affiche Japan Touch Lyon 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Japan Touch Lyon 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 28 - 29 novembre 2026</small></p>
				<p class="card-text">Japan Touch Lyon, le festival de la culture japonaise revient du 28 au 29 novembre 2026 pour une 27ème édition qui vous offrira son feu d’artifice d’invités, d’animations et d’exposants à Eurexpo Lyon. En parallèle se tiendra la 12ème édition du Salon de l'Asie ainsi que la cinquième édition d'Asian Kitchen</p>
				<a href="https://www.rom-game.fr/agenda/6524-japan+touch.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 6 : Broc&#039;Land Geek - Saint-Rambert-en-Bugey 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/broc-land-geek-saint-rambert-en-bugey-saint-rambert-en-bugey-20261016-101342.webp" class="card-img" alt="Affiche Broc&#039;Land Geek - Saint-Rambert-en-Bugey 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Broc&#039;Land Geek - Saint-Rambert-en-Bugey 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 6 décembre 2026 - 6 décembre 2026</small></p>
				<p class="card-text">Le Broc'Land Geek s'installe le 6 décembre 2026 à Saint-Rambert-en-Bugey : brocante geek, rétrogaming, cartes à collectionner, fantasy et cosplay sur 1 200 m².</p>
				<a href="https://www.rom-game.fr/agenda/8665-broc+land+geek+saint+rambert+bugey.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 7 : Broc&#039;land Geek - Montbrison 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/broc-land-geek-montbrison-2025-montbrison-20261021-151336.webp" class="card-img" alt="Affiche Broc&#039;land Geek - Montbrison 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Broc&#039;land Geek - Montbrison 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 13 décembre 2026 - 13 décembre 2026</small></p>
				<p class="card-text">Le 13 décembre 2026, Broc'Land Geek investit l'Espace Guy Poirieux de Montbrison pour une brocante consacrée au rétrogaming, au manga, aux jouets vintage et aux cartes à collectionner.</p>
				<a href="https://www.rom-game.fr/agenda/6708-broc+land+geek+montbrison.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 8 : Attack on Titan - Symphony from Paradis - Lyon 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/attack-on-titan-symphony-from-paradis-lyon-lyon-20261019-155937.webp" class="card-img" alt="Affiche Attack on Titan - Symphony from Paradis - Lyon 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Attack on Titan - Symphony from Paradis - Lyon 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 20 - 21 janvier 2027</small></p>
				<p class="card-text">Les 20 et 21 janvier 2027, l'Amphithéâtre 3000 de Lyon accueille L'Attaque des Titans - Symphony from Paradis, premier concert orchestral officiel consacré à la série.</p>
				<a href="https://www.rom-game.fr/agenda/8672-attack+on+titan+lyon.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 9 : The Music of Square Enix - Magic, Memories, and Melodies 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/the-music-of-square-enix-magic-memories-and-melodi-lyon-20251205-094609.webp" class="card-img" alt="Affiche The Music of Square Enix - Magic, Memories, and Melodies 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">The Music of Square Enix - Magic, Memories, and Melodies 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 7 février 2027 - 7 février 2027</small></p>
				<p class="card-text">Par les créateurs de Distant Worlds : music from FINAL FANTASY et NieR : Orchestra Concert, The Music of SQUARE ENIX – Magic, Memories, and Melodies célèbre les mondes inoubliables et les bandes originales emblématiques qui ont marqué des générations de récits et d’aventures dans les jeux vidéo.</p>
				<a href="https://www.rom-game.fr/agenda/8239-music+of+square+enix.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 10 : Brocante Escu’Geek 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/brocante-escu-geek-escurolles-20260930-220951.webp" class="card-img" alt="Affiche Brocante Escu’Geek 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Brocante Escu’Geek 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 20 - 21 février 2027</small></p>
				<p class="card-text">Escu'geek revient pour sa troisième édition les 20 et 21 février 2027 à la salle polyvalente d'Escurolles : jeux, jeu vidéo, cosplay et animations.</p>
				<a href="https://www.rom-game.fr/agenda/7950-brocante+escu+geek.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 11 : Fana Manga 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/fana-manga-yzeure-20260915-222808.webp" class="card-img" alt="Affiche Fana Manga 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Fana Manga 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 20 - 21 février 2027</small></p>
				<p class="card-text">Fana Manga 2027, la rencontre de la geek culture est LE rendez-vous pour profiter d’une vraie convention familiale et conviviale. L'évènement annuel Fana Manga à Yzeure revient avec des tonnes de surprises du 20 au 21 février 2027</p>
				<a href="https://www.rom-game.fr/agenda/7189-fana+manga.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 12 : Clermont Geek Convention - manga et comics 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/clermont-geek-convention-manga-et-comics-cournon-d-auvergne-20261031-100921.webp" class="card-img" alt="Affiche Clermont Geek Convention - manga et comics 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Clermont Geek Convention - manga et comics 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 20 - 21 mars 2027</small></p>
				<p class="card-text">Clermont Geek Convention les 20 et 21 mars 2027 à Clermont-Ferrand. Au programme : cosplay, animations, japan, conférences, expos, ateliers, dédicaces, tournois de jeux vidéo...</p>
				<a href="https://www.rom-game.fr/agenda/6902-clermont+geek+convention.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 13 : Le Temps des Chimères 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/le-temps-des-chimeres-puy-en-velay-20261019-131459.webp" class="card-img" alt="Affiche Le Temps des Chimères 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Le Temps des Chimères 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 2 - 4 avril 2027</small></p>
				<p class="card-text">Du 2 au 4 avril 2027, Le Temps des Chimères investit le Centre Pierre Cardinal du Puy-en-Velay pour un salon familial consacré au jeu et à l'imaginaire.</p>
				<a href="https://www.rom-game.fr/agenda/7132-le+temps+des+chimeres.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 14 : Générations Star Wars et Science-Fiction 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/generations-star-wars-et-science-fiction-cusset-20260916-220553.webp" class="card-img" alt="Affiche Générations Star Wars et Science-Fiction 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Générations Star Wars et Science-Fiction 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 15 - 16 mai 2027</small></p>
				<p class="card-text">Le salon consacré à la saga Star Wars et à la Science Fiction revient du 15 au 16 mai 2027 et se propose de réunir la famille des fans de SF dans la bonne humeur durant un week-end !</p>
				<a href="https://www.rom-game.fr/agenda/7181-star+wars-generations+star+wars+et+science-fiction.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 15 : Venez Buller à Cusset 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/venez-buller-a-cusset-cusset-20261021-115926.webp" class="card-img" alt="Affiche Venez Buller à Cusset 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Venez Buller à Cusset 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 12 juin 2027 - 12 juin 2027</small></p>
				<p class="card-text">Le 12 juin 2027, Venez Buller à Cusset ! investit la place Victor-Hugo pour une journée gratuite consacrée à la bande dessinée, au manga et aux comics.</p>
				<a href="https://www.rom-game.fr/agenda/4798-uller+cusset.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 16 : Savoie Games Festival 2027 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/savoie-games-festival-seynod-20261024-110134.webp" class="card-img" alt="Affiche Savoie Games Festival 2027">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Savoie Games Festival 2027</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 25 - 26 septembre 2027</small></p>
				<p class="card-text">Le Savoie Retro Games Festival 2027 est annoncé du 25 au 26 septembre 2027. Le plus gros salon français dédié au retrogaming revient pour combler les fans de gros pixels et autres vieilleries. Le rendez-vous est pris Salle Cap Periaz d'Annecy avec des machines jouables, des bornes, du cosplay, bref, de la pure détente vidéo ludique, avec en prime, de magnifiques invités !</p>
				<a href="https://www.rom-game.fr/agenda/6201-savoie+retro+games.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 17 : Goat Geek Festival 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/goat-geek-festival-aubenas-20260815-160155.webp" class="card-img" alt="Affiche Goat Geek Festival 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Goat Geek Festival 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 31 octobre - 1 novembre 2026</small></p>
				<p class="card-text">Le Goat Geek Festival revient les 31 octobre et 1er novembre 2026 à l'Espace Lienhart d'Aubenas pour une troisième édition consacrée à la culture geek et au rétrogaming.</p>
				<a href="https://www.rom-game.fr/agenda/7873-goat+geek+festival.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 18 : Japan Event 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/japan-event-clermont-ferrand-20260917-091657.webp" class="card-img" alt="Affiche Japan Event 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Japan Event 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 31 octobre - 1 novembre 2026</small></p>
				<p class="card-text">Le Japan Event by CGC revient au Polydôme de Clermont-Ferrand les 31 octobre et 1er novembre 2026, dédié à la pop culture japonaise.</p>
				<a href="https://www.rom-game.fr/agenda/7701-japan+event+by+cgc.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 19 : MicroAlchimie 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/microalchimie-clerieux-20260504-222955.webp" class="card-img" alt="Affiche MicroAlchimie 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">MicroAlchimie 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 30 octobre - 1 novembre 2026</small></p>
				<p class="card-text">L'association Triple A est heureuse de vous annoncer la tenue, le week-end sur 3 jours du 30 octobre au 1er novembre 2026. Cette µAlchimie proposera aux inconditionnels de l'Amiga une convention conviviale pendant laquelle les fans d’Atari, de Mac OS, de Linux et de consoles rétro sont également les bienvenus.</p>
				<a href="https://www.rom-game.fr/agenda/6761-malchimie-association+triple+a.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 20 : Retrogaming InfoMedia 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/retrogaming-infomedia-saint-just-saint-rambert-20261021-115211.webp" class="card-img" alt="Affiche Retrogaming InfoMedia 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Retrogaming InfoMedia 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 24 octobre 2026 - 24 octobre 2026</small></p>
				<p class="card-text">Le 24 octobre 2026, Retrogaming InfoMedia réunit à Saint-Just-Saint-Rambert plus de 40 consoles en libre accès, des concours sur écran géant et des exposants rétro.</p>
				<a href="https://www.rom-game.fr/agenda/8678-retrogaming+infomedia.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 21 : NekoQuest Fest 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/nekoquest-fest-samoens-20260904-231423.webp" class="card-img" alt="Affiche NekoQuest Fest 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">NekoQuest Fest 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 24 - 25 octobre 2026</small></p>
				<p class="card-text">Le NekoQuest Fest s'installe à la Salle du Bois aux Dames de Samoëns les 24 et 25 octobre 2026, entre cinéma, jeu vidéo et culture japonaise.</p>
				<a href="https://www.rom-game.fr/agenda/8586-nekoquest+fest.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 22 : Vide Grenier du Geek Clermont 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/vide-grenier-du-geek-clermont-clermont-ferrand-20260920-223916.webp" class="card-img" alt="Affiche Vide Grenier du Geek Clermont 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Vide Grenier du Geek Clermont 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 18 octobre 2026 - 18 octobre 2026</small></p>
				<p class="card-text">Le Vide-Grenier du Geek de Clermont-Ferrand se déroulera  le dimanche 18 octobre 2026, place de la Victoire de 9h à 13h</p>
				<a href="https://www.rom-game.fr/agenda/6577-vide+grenier+geek+clermont+ferrand.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 23 : Hashtag Festival 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/hashtag-festival-bourg-en-bresse-20260428-231117.webp" class="card-img" alt="Affiche Hashtag Festival 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Hashtag Festival 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 17 - 18 octobre 2026</small></p>
				<p class="card-text">Le Hashtag Festival se déroulera du 17 au 18 octobre 2026 au parc des expositions de Bourg en Bresse pour une quatrième édition dédiée aux geeks et amateurs de pop culture</p>
				<a href="https://www.rom-game.fr/agenda/6394-hashtag+festival.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 24 : Chibi Manga 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/chibi-manga-sury-le-comtal-20260904-231823.webp" class="card-img" alt="Affiche Chibi Manga 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Chibi Manga 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 17 - 18 octobre 2026</small></p>
				<p class="card-text">Le festival Chibi Manga 2026 se tiendra les 17 et 18 octobre à l'Espace des Chartonnes de Sury-le-Comtal dans la Loire. Ce salon dédié à la culture manga, geek et fantastique promet un week-end d'animations variées.</p>
				<a href="https://www.rom-game.fr/agenda/8156-chibi+manga.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 25 : Braderie du Geek - Romans sur Isère 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/braderie-du-geek-romans-sur-isere-romans-sur-isere-20261001-204858.webp" class="card-img" alt="Affiche Braderie du Geek - Romans sur Isère 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Braderie du Geek - Romans sur Isère 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 17 - 18 octobre 2026</small></p>
				<p class="card-text">La Braderie Vintage et Rétrogaming de Romans-sur-Isère se tient les 17 et 18 octobre 2026 en centre-ville, sous le signe de la Route 66.</p>
				<a href="https://www.rom-game.fr/agenda/7683-braderie+du+geek+romans.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 26 : Chasse aux méchants 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/chasse-aux-mechants-vaulx-en-velin-20261015-100453.webp" class="card-img" alt="Affiche Chasse aux méchants 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Chasse aux méchants 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 10 octobre - 1 novembre 2026</small></p>
				<p class="card-text">Pour Halloween, Mini World Lyon cache 31 méchants cultes dans ses décors miniatures, à débusquer du 10 octobre au 1er novembre 2026 à Vaulx-en-Velin.</p>
				<a href="https://www.rom-game.fr/agenda/8660-chasse+mechants.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 27 : Fantasy en Beaujolais 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/fantasy-en-beaujolais-saint-didier-sur-chalaronne-20260603-151020.webp" class="card-img" alt="Affiche Fantasy en Beaujolais 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Fantasy en Beaujolais 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 9 - 11 octobre 2026</small></p>
				<p class="card-text">Le festival Fantasy en Beaujolais revient pour sa 12e édition du 9 au 11 octobre 2026 à Saint-Didier-sur-Chalaronne, autour du thème « … et puis renaître ».</p>
				<a href="https://www.rom-game.fr/agenda/8536-fantasy+en+beaujolais.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 28 : Les Aventuriales 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/les-aventuriales-menetrol-20260921-230322.webp" class="card-img" alt="Affiche Les Aventuriales 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Les Aventuriales 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 26 - 27 septembre 2026</small></p>
				<p class="card-text">Les Aventuriales 2026 se tiendront les 26 et 27 septembre à Ménétrol, dans le Puy-de-Dôme, proposant un salon dédié aux littératures de l'imaginaire et à l'artisanat.</p>
				<a href="https://www.rom-game.fr/agenda/7049-les+aventuriales.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 29 : Festival des jeux de Vichy 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/festival-des-jeux-de-vichy-2025-vichy-20260401-154052.webp" class="card-img" alt="Affiche Festival des jeux de Vichy 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Festival des jeux de Vichy 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 19 - 20 septembre 2026</small></p>
				<p class="card-text">Vous êtes conviés à l'édition du Festival des jeux de Vichy qui se déroulera les 19 et 20 septembre 2026. Venez jouer : jeux de société, jeux en bois, escape game, jeux de rôles, séance de dédicaces, auteurs de prototypes, youtubeurs, chroniqueurs ludiques... Le tout dans un cadre unique en Europe !</p>
				<a href="https://www.rom-game.fr/agenda/6672-festival+des+jeux+de+vichy.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 30 : GeekNIID 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/geekniid-grigny-20260829-154714.webp" class="card-img" alt="Affiche GeekNIID 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">GeekNIID 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 19 - 20 septembre 2026</small></p>
				<p class="card-text">La GeekNIID 2026 se déroulera 19 et 20 Septembre à Grigny-sur-Rhône, proposant un week-end dédié aux jeux vidéo et à la culture geek.</p>
				<a href="https://www.rom-game.fr/agenda/8100-geekniid.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 31 : Nostalgeek 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/nostalgeek-voiron-20260903-221956.webp" class="card-img" alt="Affiche Nostalgeek 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Nostalgeek 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 12 - 13 septembre 2026</small></p>
				<p class="card-text">Nostalgeek se tiendra du 12 au 13 septembre 2026 à Voiron pour vous proposer Rétro gaming et Jeux vidéo, Carte pokémon, Vinyles etc</p>
				<a href="https://www.rom-game.fr/agenda/7774-nostalgeek.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 32 : Mangalaxy Festival Valence 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/mangalaxy-festival-valence-valence-20260521-222942.webp" class="card-img" alt="Affiche Mangalaxy Festival Valence 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Mangalaxy Festival Valence 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 12 - 13 septembre 2026</small></p>
				<p class="card-text">Mangalaxy revient à Valence pour une huitième édition, du 12 au 13 septembre 2026, Mangalaxy est un festival qui a pour but de réunir les passionnés de mangas, animes et Japon, retro gaming et les youtubers, amateurs de comics et de sciences-fictions</p>
				<a href="https://www.rom-game.fr/agenda/6684-mangalaxy.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 33 : Roanne Geek Convention 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/roanne-geek-convention-riorges-20260521-223705.webp" class="card-img" alt="Affiche Roanne Geek Convention 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Roanne Geek Convention 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 12 - 13 septembre 2026</small></p>
				<p class="card-text">La Roanne Geek Convention se déroule du 12 au 13 septembre 2026 au Scarabée de Riorges, célébrant les cultures geek et japonaises sur 4 000m².</p>
				<a href="https://www.rom-game.fr/agenda/5578-roanne+geek+convention.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 34 : Japan Geek Stories Anse 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/japan-geek-stories-anse-anse-20260122-152038.webp" class="card-img" alt="Affiche Japan Geek Stories Anse 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Japan Geek Stories Anse 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 12 - 13 septembre 2026</small></p>
				<p class="card-text">Japan Geek Stories s'installe à Anse les 12 et 13 septembre 2026 avec concerts, doublage avec Chantal Baroin, spectacles d'hypnose, catch cosplay et bornes d'arcade rétro.</p>
				<a href="https://www.rom-game.fr/agenda/8315-japan+geek+stories+anse.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 35 : Yggdrasil - Fort Fort Lointain 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/yggdrasil-fort-fort-lointain-bron-20260829-161633.webp" class="card-img" alt="Affiche Yggdrasil - Fort Fort Lointain 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Yggdrasil - Fort Fort Lointain 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 5 - 6 septembre 2026</small></p>
				<p class="card-text">Fort Fort Lointain célèbre les 12 ans d'Yggdrasil à l'Hippodrome de Parilly les 5 et 6 septembre 2026 avec un festival en plein air dédié au médiéval fantasy décalé.</p>
				<a href="https://www.rom-game.fr/agenda/8356-yggdrasil+-+fort+fort+lointain.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 36 : Expo Kawaii 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/expo-kawaii-saint-jean-de-sixt-20260123-115749.webp" class="card-img" alt="Affiche Expo Kawaii 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Expo Kawaii 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 13 juin 2026 - 13 juin 2026</small></p>
				<p class="card-text">L'Expo Kawaii s'installe à Saint-Jean-de-Sixt le 13 juin 2026 avec entrée gratuite, créatrices artisanales, ateliers et tombola dans l'univers mignon de la culture kawaii.</p>
				<a href="https://www.rom-game.fr/agenda/8343-expo+kawaii.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 37 : Marché Fantastique 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/marche-fantastique-bourgoin-jallieu-20260603-103334.webp" class="card-img" alt="Affiche Marché Fantastique 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Marché Fantastique 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 13 juin 2026 - 13 juin 2026</small></p>
				<p class="card-text">Le Marché Fantastique revient pour sa troisième édition le 13 juin 2026 sur la Place de la Folatière à Bourgoin-Jallieu, entrée gratuite.</p>
				<a href="https://www.rom-game.fr/agenda/8020-marche+fantastique.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 38 : Broc&#039;Land Geek - Thiers 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/broc-land-geek-thiers-20260602-223343.webp" class="card-img" alt="Affiche Broc&#039;Land Geek - Thiers 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Broc&#039;Land Geek - Thiers 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 7 juin 2026 - 7 juin 2026</small></p>
				<p class="card-text">Broc' Land Geek pose ses étals le 7 juin 2026 à la Salle JO Cognet de Thiers pour une brocante geek de 900 m², entrée 3 euros.</p>
				<a href="https://www.rom-game.fr/agenda/8515-broc+land+geek+thiers.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 39 : Japan Geek Stories Bourg en Bresse 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/japan-geek-stories-bourg-en-bresse-bourg-en-bresse-20260602-222203.webp" class="card-img" alt="Affiche Japan Geek Stories Bourg en Bresse 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Japan Geek Stories Bourg en Bresse 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 6 - 7 juin 2026</small></p>
				<p class="card-text">Japan Geek Stories pose ses valises les 6 et 7 juin 2026 à la Salle des Fêtes de Bourg-en-Bresse pour un week-end manga, cosplay et jeux vidéo.</p>
				<a href="https://www.rom-game.fr/agenda/8502-japan+geek+stories+bourg.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 40 : Back to RetroGaming Festival 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/back-to-retrogaming-festival-dolomieu-20260603-104227.webp" class="card-img" alt="Affiche Back to RetroGaming Festival 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Back to RetroGaming Festival 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 6 juin 2026 - 6 juin 2026</small></p>
				<p class="card-text">Back to RetroGaming Festival, troisième édition, le 6 juin 2026 à la salle des fêtes de Dolomieu : 600 m² de consoles, bornes d'arcade et tournois.</p>
				<a href="https://www.rom-game.fr/agenda/7744-back+to+retrogaming+festival.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 41 : HeroFestival - Grenoble 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/herofestival-grenoble-grenoble-20260602-222531.webp" class="card-img" alt="Affiche HeroFestival - Grenoble 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">HeroFestival - Grenoble 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 6 - 7 juin 2026</small></p>
				<p class="card-text">Mangas, comics, séries, cinéma, bandes dessinées, jeux vidéo, cosplay... les Héros reviennent à Grenoble du 6 au 7 juin 2026 pour fêter le 8ème épisode du HeroFestival : 2 jours dédiés aux BD, Mangas, Comics, Séries, Cinéma, Jeux Vidéo, Cosplay, Musique…</p>
				<a href="https://www.rom-game.fr/agenda/6263-herofestival-hero+festival-herofestival+grenoble.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 42 : Manga Mania 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/manga-mania-montelimar-20260430-160012.webp" class="card-img" alt="Affiche Manga Mania 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Manga Mania 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 6 - 7 juin 2026</small></p>
				<p class="card-text">Le festival Manga Mania revient du 6 au 7 juin 2026 pour une dixième édition qui sera dédiée comme toujours au manga, ainsi qu'à la culture japonaise.</p>
				<a href="https://www.rom-game.fr/agenda/6264-manga+mania.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 43 : Intergalactiques - Festival de Science-Fiction de Lyon 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/intergalactiques-festival-de-science-fiction-de-ly-lyon-20260602-222028.webp" class="card-img" alt="Affiche Intergalactiques - Festival de Science-Fiction de Lyon 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Intergalactiques - Festival de Science-Fiction de Lyon 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 5 - 7 juin 2026</small></p>
				<p class="card-text">Les Intergalactiques reviennent du 5 au 7 juin 2026 à Lyon pour leur 14e édition, célébrant science-fiction, réflexions politiques et pop culture avec un nouveau prix de traduction.</p>
				<a href="https://www.rom-game.fr/agenda/7197-les+intergalactiques-aoa+productions.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 44 : Otaku Matsuri 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/otaku-matsuri-bellerive-sur-allier-20251104-104117.webp" class="card-img" alt="Affiche Otaku Matsuri 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Otaku Matsuri 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 30 - 31 mai 2026</small></p>
				<p class="card-text">Otaku Matsuri se tiendra les 30 et 31 mai 2026 à l'espace Jean-Dubessay de Bellerive-sur-Allier. Cet événement constitue la première manifestation japonaise de l'agglomération vichyssoise, proposant animations culturelles et découverte nippone.</p>
				<a href="https://www.rom-game.fr/agenda/8180-otaku+matsuri.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 45 : Geek Legends Oyonnax 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/geek-legends-oyonnax-oyonnax-20251104-143851.webp" class="card-img" alt="Affiche Geek Legends Oyonnax 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Geek Legends Oyonnax 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 30 - 31 mai 2026</small></p>
				<p class="card-text">La convention Geek Legends - Oyonnax #1 se tiendra les 30 et 31 mai 2026 à Valexpo pour célébrer la culture pop dans la ville de l'Ain.</p>
				<a href="https://www.rom-game.fr/agenda/8217-geek+legends+oyonnax.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 46 : Ripa Manga Show 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/ripa-manga-show-2025-rive-de-gier-20260504-221352.webp" class="card-img" alt="Affiche Ripa Manga Show 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Ripa Manga Show 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 24 mai 2026 - 24 mai 2026</small></p>
				<p class="card-text">Le Ripa Manga Show est annoncé le 24 mai 2026 à Rive-de-Gier. Cette convention manga et pop culture vous proposera des animations, concours et des rencontres et dédicaces avec de nombreux invités</p>
				<a href="https://www.rom-game.fr/agenda/6449-ripa+manga+show.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 47 : Puy-Guillaume Manga Show 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/puy-guillaume-manga-show-puy-guillaume-20260504-225636.webp" class="card-img" alt="Affiche Puy-Guillaume Manga Show 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Puy-Guillaume Manga Show 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 23 mai 2026 - 23 mai 2026</small></p>
				<p class="card-text">Le Puy-Guillaume Manga Show revient le 23 mai 2026 à la salle des fêtes pour une deuxième édition tournée vers le manga, le jeu vidéo et la pop culture.</p>
				<a href="https://www.rom-game.fr/agenda/8489-puy+guillaume+manga+show.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 48 : OctoGônes - Convention du Jeu et de l&#039;Imaginaire 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/octogones-convention-du-jeu-et-de-l-imaginaire-villeurbanne-20260227-152704.webp" class="card-img" alt="Affiche OctoGônes - Convention du Jeu et de l&#039;Imaginaire 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">OctoGônes - Convention du Jeu et de l&#039;Imaginaire 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 22 - 24 mai 2026</small></p>
				<p class="card-text">OctoGônes revient du 22 au 24 mai 2026 à Eurexpo Lyon pour une seizième édition de la Convention du Jeu et de l'Imaginaire. Vous retrouverez au cours de l'événement des jeux de société, cartes, figurines, grandeur nature, jeu de rôle... sans oublier littérature et culture de l'imaginaire, illustrateurs, éditeurs...</p>
				<a href="https://www.rom-game.fr/agenda/7346-octogones.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 49 : Geek Collector - Roanne 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/geek-collector-roanne-roanne-20260513-113626.webp" class="card-img" alt="Affiche Geek Collector - Roanne 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Geek Collector - Roanne 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 17 mai 2026 - 17 mai 2026</small></p>
				<p class="card-text">Nouveau salon des geeks collectionneurs avec Geek Collector Roanne qui se tiendra le 17 mai 2026</p>
				<a href="https://www.rom-game.fr/agenda/8012-vide+grenier+geek+roanne.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 50 : Retro Game Alpes - Flippers et Retrogaming 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/retro-game-alpes-flippers-et-retrogaming-fontanil-cornillon-20260513-174424.webp" class="card-img" alt="Affiche Retro Game Alpes - Flippers et Retrogaming 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Retro Game Alpes - Flippers et Retrogaming 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 15 - 17 mai 2026</small></p>
				<p class="card-text">Le Retro Game Alpes se déroulera du vendredi 15 au dimanche 17 mai 2026 à l’espace Claretière au Fontanil. Trois journées où vous pourrez vous replonger dans l’univers du jeu vidéo et des salles d'arcade des années 70 à 2000. Au programme cette année : des tournois, des conférences, des quizz, des consoles, des bornes, des flippers, une tombola et du fun !</p>
				<a href="https://www.rom-game.fr/agenda/6458-retro+game+alpes.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 51 : Indie Game Lyon 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/indie-game-lyon-villeurbanne-20260409-155030.webp" class="card-img" alt="Affiche Indie Game Lyon 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Indie Game Lyon 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 15 - 16 mai 2026</small></p>
				<p class="card-text">Le salon Indie Game Lyon revient les 15 et 16 mai 2026 pour une septième édition organisée par Quick Time Events. Indie Game Lyon qui aura pour vocation de promouvoir la scène indépendante du jeu vidéo.</p>
				<a href="https://www.rom-game.fr/agenda/7148-indie+game+lyon.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 52 : World of Warcraft : 20 Years of Music - Lyon 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/world-of-warcraft-20-years-of-music-lyon-lyon-20260122-215419.webp" class="card-img" alt="Affiche World of Warcraft : 20 Years of Music - Lyon 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">World of Warcraft : 20 Years of Music - Lyon 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 9 mai 2026 - 9 mai 2026</small></p>
				<p class="card-text">La Halle Tony Garnier accueille le 9 mai 2026 le concert symphonique World of Warcraft : 20 Years of Music, plongeant le public lyonnais au cœur d'Azeroth avec le Sinfonia Pop Orchestra et son chef Jordan Gudefin.</p>
				<a href="https://www.rom-game.fr/agenda/8323-world+of+warcraft+lyon.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 53 : Galactiverse Festival 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/galactiverse-festival-20260504-224351.webp" class="card-img" alt="Affiche Galactiverse Festival 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Galactiverse Festival 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 9 - 10 mai 2026</small></p>
				<p class="card-text">Le Galactiverse Festival 2026 s'installe à la salle polyvalente de La Buisse les 9 et 10 mai pour un week-end dédié à la science-fiction et à la pop culture.</p>
				<a href="https://www.rom-game.fr/agenda/8487-galactiverse+festival.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 54 : Speedons - marathon speedrun caritatif 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/speedons-marathon-speedrun-caritatif-lyon-20251125-103014.webp" class="card-img" alt="Affiche Speedons - marathon speedrun caritatif 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Speedons - marathon speedrun caritatif 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 7 - 10 mai 2026</small></p>
				<p class="card-text">Speedons est un marathon de speedrun caritatif de 55 heures diffusé sur Twitch et levant des dons pour Médecins du Monde. Sa quatrième édition se déroulera du 7 au 10 mai 2026 au Centre des Congrès de Lyon</p>
				<a href="https://www.rom-game.fr/agenda/6393-speedons.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 55 : Joyeuse Anime Fest 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/joyeuse-anime-fest-lablachere-20260428-224303.webp" class="card-img" alt="Affiche Joyeuse Anime Fest 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Joyeuse Anime Fest 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 2 - 3 mai 2026</small></p>
				<p class="card-text">La 2? édition du Joyeuse Anime Fest' se tient les 2 et 3 mai 2026 à la salle d'animation rurale de Lablachère, en Ardèche, autour de la culture japonaise et de l'animation.</p>
				<a href="https://www.rom-game.fr/agenda/8479-joyeuse+anime+fest.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 56 : Broc&#039;Land Geek - Gex 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/broc-land-geek-gex-gex-20260430-160702.webp" class="card-img" alt="Affiche Broc&#039;Land Geek - Gex 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Broc&#039;Land Geek - Gex 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 1 mai 2026 - 1 mai 2026</small></p>
				<p class="card-text">Le salon Broc' Land Geek revient à l'Espace Perdtemps de Gex le 1er mai 2026, avec 2 000 m² d'exposants, concours cosplay, jeu-concours et bourse TCG.</p>
				<a href="https://www.rom-game.fr/agenda/6712-broc+land+geek+gex.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 57 : Japan Touch Haru et Geek Touch 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/2025-06-11-10-24-20_JapanTouchHaruetGeekTouch.jpg" class="card-img" alt="Affiche Japan Touch Haru et Geek Touch 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Japan Touch Haru et Geek Touch 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 25 - 26 avril 2026</small></p>
				<p class="card-text">Haru Japan Touch et Geek Touch - Le festival dédié à la pop culture, manga, animation, mode, musique et jeux vidéo, la Japan Touch Haru revient pour sa 11ème édition printanière, les 25 et 26 avril 2026 à Eurexpo Lyon. En parallèle, le salon Geek Touch sera consacré quant à lui à l’univers geek</p>
				<a href="https://www.rom-game.fr/agenda/6888-geek+touch-japan+touch-japan+touch+haru.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 58 : Warp-Zone 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/warp-zone-givors-20260415-231434.webp" class="card-img" alt="Affiche Warp-Zone 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Warp-Zone 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 25 - 26 avril 2026</small></p>
				<p class="card-text">Fans de jeux vidéo, le festival Warp-Zone ouvre ses portes les 25 et 26 avrile 2026 à 20 minutes de Lyon et Saint-Etienne (Givors)</p>
				<a href="https://www.rom-game.fr/agenda/7998-warp+zone.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 59 : Chaponost Counter Strike 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/chaponost-counter-strike-chaponost-20260106-141339.webp" class="card-img" alt="Affiche Chaponost Counter Strike 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Chaponost Counter Strike 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 25 - 26 avril 2026</small></p>
				<p class="card-text">Le Chaponost Counter Strike 2026 se déroule les 25 et 26 avril à la salle des fêtes de Chaponost, tournoi e-sport réunissant 32 équipes pour 1 500 euros de gains.</p>
				<a href="https://www.rom-game.fr/agenda/8144-chaponost+counter+strike.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>

<!-- Événement 60 : Broc&#039;land GEEK - Craponne 2026 -->
<div class="card mb-3 article">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://www.rom-game.fr/multimedia/agendaM/broc-land-geek-craponne-2025-craponne-20260415-215859.webp" class="card-img" alt="Affiche Broc&#039;land GEEK - Craponne 2026">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Broc&#039;land GEEK - Craponne 2026</h5>
				<p class="card-text"><small class="text-muted"><strong>Auvergne-Rhône-Alpes</strong> - 19 avril 2026 - 19 avril 2026</small></p>
				<p class="card-text">Ne manquez pas la seconde édition de Broc'land GEEK and Co - Craponne 2025 le 19 avril 2026. Au menu, Pop Culture, Jouets Vintage et Fantastik !</p>
				<a href="https://www.rom-game.fr/agenda/6174-broc+land+geek+craponne.html" target="_blank" class="btn btn-primary">Lien de l'événement</a>
			</div>
		</div>
	</div>
</div>


