# Sites de découverte du PHP en BTS SIO1

Site dynamique d'exemple et site d'entrainement au PHP

> **Note :** Dernière MAJ 10/2026 (version simplifiée)

Ce codespace fournit un environnement de développement LAMP (Linux, Apache/PHP, MariaDB) prêt à l'emploi pour vos projets PHP.

## Arborescence du dépôt

Voici l'arborescence du dépôt et le rôle des différents composants :

```
.
├── .devcontainer/ : config du codespace
│   ├── devcontainer.json : Configuration du Dev Container pour VS Code
│   ├── setup-lamp.sh : Script de configuration de l'environnement LAMP (MariaDB, PhpMyAdmin)
│   └── Dockerfile : Dockerfile pour construire l'image du Dev Container serveur php avec mariadb
├── .vscode/ : config pour XDebug et parametres de vscode
├── database/ : scripts pour la BDD ⭐
│   ├── scripts/ : contient 3 scripts bash pour gérer la BDD métier
│   └── sources-sql/ : fichiers SQL pour contruire la BDD métier ⭐
├── site/ : Dossier pour le code du site web (API, front-end, etc.) ⭐
├── start.sh : Script de lancement pour démarrer les services
└── stop.sh : Script pour arreter les services
```

### 📁 Dossiers principaux à modifier (⭐)

- **`site/`** : Votre code PHP (classes, API, pages web)
- **`database/sources-sql/`** : Vos fichiers SQL de base de données

### ⚙️ Fichiers de configuration (optionnels)

- **`devcontainer.json`** : Variables d'environnement du codespace à adapter


## Configuration du Codespace et lancement de l'application

Ce dépôt est configuré pour fonctionner avec les Codespaces de GitHub et les Dev Containers de Visual Studio Code. Suivez les étapes ci-dessous pour configurer votre environnement de développement.

### Utilisation avec GitHub Codespaces

1. **Créez un codespace pour ouvrir ce dépot** :
   - Cliquez sur le bouton "Code" dans GitHub et sélectionnez "Open with Codespaces".
   - Si vous n'avez pas encore de Codespace, cliquez sur "New Codespace".

   Le Codespace ainsi créé contient toutes les configurations nécessaires pour démarrer le développement.
   Au lancement, le fichier devcontainer.json

### Serveur php et service mariadb (avec la base métier)

1. **Pour lancer les services** :
   - Dans le terminal, exécutez le script `start.sh` :
     ```bash
     ./start.sh
     ```
     Ce script démarre le serveur PHP intégré sur le port 8000, démarre mariadb et crée la base métier depuis le script renseigné (mettre à jour en fonction du projet).

2. **Ouvrir le service php dans un navigateur** :
   - Accédez à `http://localhost:8000` pour voir la page d'accueil de l'API (ou depuis ports, ouvrir le service démarré sur le port 8000).

3. **Accèder à la BDD** :
   - En mode commande depuis le client mysql en ligne de commande
     Exemple :
     ```bash
     mysql -u mediateq-web -p
     ```
   - En client graphique avec l'extension Database dans le codespace (Host:127.0.0.1)

   - avec phpMyAdmin en ouvrant le serveur démarré sur le port 8080 (depuis ports, ouvrir le service démarré sur le port 8080).

4. **initialiser la BDD** :
   - Au premier démarrage, créez la bdd métier avec le fichier sql
     ```bash
     ./database/scripts/initBDD.sh
     ```

5. **Sauver et mettre à jour la BDD** :
   - A chaque fois que vous avez fait des modifs significatives dans la BDD métier, lancer le script bash saveBDD pour écraser le fichier sql actuel de la bdd par votre sauvegarde (puis pensez à push sur le distant pour vos collaborateurs)
     ```bash
     ./database/scripts/saveBDD.sh
     ```
   - Si des modifs ont été faites à la BDD et que vous avez récupéré du dépot distant (pull) une version mise à jour du script de la BDD métier, lancer le script bash reloadBDD pour écraser la bdd actuelle de votre codespace par celle du script récupéré.
     ```bash
     ./database/scripts/reloadBDD.sh
     ```

## Utilisation de XDebug

Ce Codespace contient XDebug pour le débogage PHP.

1. **Exemple de déboguage avec Visual Studio Code** :
   - Ouvrez le panneau de débogage en cliquant sur l'icône de débogage dans la barre latérale ou en utilisant le raccourci clavier `Ctrl+Shift+D`.
   - Sélectionnez la configuration "Listen for XDebug" et cliquez sur le bouton de lancement (icône de lecture).
   - Ouvrez un fichier php
   - Ajouter un point d'arrêt.
   - Solicitez dans le navigateur une page qui appelle le traitement
   - Une fois le point d'arrêt atteint, essayez de survoler les variables, d'examiner les variables locales, etc.

[Tuto Grafikart : Xdebug, l'exécution pas à pas ](https://grafikart.fr/tutoriels/xdebug-breakpoint-834)

## Liste des extensions préinstallées dans le codespace pour ce dépôt

Pour faciliter le développement et la maintenance de ce projet, certaines extensions ont été automatiquement installées dans Visual Studio Code dans le codespace. Voici leur détail :

- **PHP Intelephense** (`bmewburn.vscode-intelephense-client`) : Fournit des fonctionnalités avancées pour le développement PHP, telles que l'autocomplétion, la vérification de syntaxe, et la navigation dans le code.
- **MySQL** (`cweijan.vscode-mysql-client2`) : Permet de gérer et d'interagir avec vos bases de données MySQL directement depuis VSCode.
- **Docker** (`ms-azuretools.vscode-docker`) : Facilite la gestion des conteneurs Docker, vous permettant de construire, gérer et déboguer vos conteneurs directement depuis l'éditeur.
- **CodeMetrics** (`kisstkondoros.vscode-codemetrics`) : Fournit des métriques de complexité du code pour vous aider à identifier les zones du code qui pourraient nécessiter une refactorisation.
- **Prettier** (`esbenp.prettier-vscode`) : Un formateur de code qui assure une mise en forme cohérente de votre code.
- **PHP DocBlocker** (`neilbrayfield.php-docblocker`) : Aide à générer des blocs de documentation PHPDoc pour vos fonctions et classes.
- **SonarLint** (`SonarSource.sonarlint-vscode`) : Analyse statique du code pour détecter les erreurs et les mauvaises pratiques.
- **Git History** (`donjayamanne.githistory`) : Permet de visualiser et de naviguer dans l'historique des commits Git.
