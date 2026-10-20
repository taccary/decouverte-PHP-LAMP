-- Script d'initialisation générique de la base de données
-- Le nom de la base est défini via la variable d'environnement WEBAPP_DB_NAME déclarée et renseignée dans database/scripts/config.sh
-- L'utilisateur applicatif est défini via les variables d'environnement WEBAPP_USER et WEBAPP_PASSWORD déclarées et renseignées dans database/scripts/config.sh
-- Ce script sera traité par les scripts bash qui remplaceront les placeholders

-- Création de la base de données
DROP DATABASE IF EXISTS `__WEBAPP_DB_NAME__`;

CREATE DATABASE IF NOT EXISTS `__WEBAPP_DB_NAME__` CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Sélection de la base de données
USE `__WEBAPP_DB_NAME__`;

-- Utilisateur applicatif paramétrable
DROP USER IF EXISTS '__WEBAPP_USER__' @'%';

CREATE USER '__WEBAPP_USER__' @'%' IDENTIFIED BY '__WEBAPP_PASSWORD__';

GRANT
SELECT ON __WEBAPP_DB_NAME__.* TO '__WEBAPP_USER__' @'%';


-- Flush des privilèges
FLUSH PRIVILEGES;