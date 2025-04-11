-- table user
CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    statut VARCHAR (20) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telephone INT(10) NOT NULL,
    adresse VARCHAR(555) NOT NULL,
    groupe VARCHAR(100) NOT NULL,
    composition_famille INT (2) NOT NULL,
    participation INT(3) NOT NULL
);

-- Table produit
CREATE TABLE IF NOT EXISTS produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producteur VARCHAR(100) NOT NULL,
    ref_produit VARCHAR(100) NOT NULL,
    article VARCHAR(255) NOT NULL,
    descriptif VARCHAR(555) NOT NULL,
    conditionnement VARCHAR(100) NOT NULL,
    poids_produit_kg DECIMAL(3, 3) NOT NULL,
    poids_emballage_estimekg DECIMAL(3, 3) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- on crée fichier sql
-- on va sur phpMyAdmin sur projet router
-- on fait importer
-- choisir un fichier
-- > bdd_router.sql> importer