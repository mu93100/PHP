CREATE DATABASE IF NOT EXISTS livres_et_compagnie;
USE livres_et_compagnie;

CREATE TABLE IF NOT EXISTS produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200) NOT NULL,
    auteur VARCHAR(100) NOT NULL,
    categorie VARCHAR(100) NOT NULL,
    prix DECIMAL(3,2) NOT NULL,        
    quantite_stock INT NOT NULL,
    description VARCHAR(600) NOT NULL
);

CREATE TABLE client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    adresse_livraison VARCHAR(300) NOT NULL,
    commande_id INT NOT NULL,
    livres_commandes_titre VARCHAR(200) NOT NULL,
    quantite INT NOT NULL, 
    statut_commande VARCHAR(100) NOT NULL,        
    FOREIGN KEY (commande_id) REFERENCES commande(id)
);

CREATE TABLE commande (
    client_id INT NOT NULL, 
    produit_id INT NOT NULL,
    livres_commandes_titre VARCHAR(200) NOT NULL,
    quantite INT NOT NULL,  
    statut_commande VARCHAR(100) NOT NULL,        
    PRIMARY KEY (client_id, produit_id),
    FOREIGN KEY (client_id) REFERENCES client(id), -- lien vers le client
    FOREIGN KEY (produit_id) REFERENCES produit(id) -- lien vers le produit
);