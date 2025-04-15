CREATE DATABASE IF NOT EXISTS boulangerie2;

-- Sélection de la base de données à utiliser
USE boulangerie2;

-- Création des tables
CREATE TABLE utilisateur (
    user_id INT AUTO_INCREMENT PRIMARY KEY,  
    first_name VARCHAR(50) NOT NULL,            
    last_name VARCHAR(50) NOT NULL,             
    password PASSWORD(12) NOT NULL,                 
    is_admin VARCHAR(20),                         
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE categorie (
    categorie_id INT AUTO_INCREMENT PRIMARY KEY,  
    categorie_name VARCHAR(50) NOT NULL,            
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE produit (
    product_id INT AUTO_INCREMENT PRIMARY KEY,  
    product_name VARCHAR(50) NOT NULL,            
    prix FLOAT() NOT NULL,             
    FOREIGN KEY (categorie_id) REFERENCES categorie(categorie_id) ON DELETE CASCADE,
    img VARCHAR(200),                         
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
CREATE DATABASE IF NOT EXISTS boulangerie2;

-- Sélection de la base de données à utiliser
USE boulangerie2;

-- Création des tables
CREATE TABLE utilisateur (
    user_id INT AUTO_INCREMENT PRIMARY KEY,  
    first_name VARCHAR(50) NOT NULL,            
    last_name VARCHAR(50) NOT NULL,            
    password PASSWORD(12) NOT NULL,                
    is_admin VARCHAR(20),                        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE categorie (
    categorie_id INT AUTO_INCREMENT PRIMARY KEY,  
    categorie_name VARCHAR(50) NOT NULL,            
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE produit (
    product_id INT AUTO_INCREMENT PRIMARY KEY,  
    product_name VARCHAR(50) NOT NULL,            
    prix FLOAT(4,2) NOT NULL,            
    FOREIGN KEY (categorie_id) REFERENCES categorie(categorie_id) ON DELETE CASCADE,
    img VARCHAR(200),                        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE commandes_utilisateur (
    command_id INT AUTO_INCREMENT PRIMARY KEY,  
    FOREIGN KEY (user_id) REFERENCES utilisateur(user_id) ON DELETE CASCADE,
    command_date DATETIME,                        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE commandes_produit (
    FOREIGN KEY (command_id) REFERENCES commandes(command_id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES produit(product_id) ON DELETE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci; 