
-- Création des tables
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    first_name VARCHAR(50) NOT NULL,            
    last_name VARCHAR(50) NOT NULL,            
    password VARCHAR(255) NOT NULL,                
    is_admin TINYINT(1) NOT NULL DEFAULT 0                       
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    categorie_name VARCHAR(50) NOT NULL            
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE produit (
    product_id INT AUTO_INCREMENT PRIMARY KEY,  
    product_name VARCHAR(50) NOT NULL,            
    prix FLOAT(4,2) NOT NULL, 
    categorie_id INT NOT NULL,           
    FOREIGN KEY (categorie_id) REFERENCES categorie(id) ON DELETE CASCADE,
    img VARCHAR(200)                      
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE commandes_utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    FOREIGN KEY (user_id) REFERENCES utilisateur(id) ON DELETE CASCADE,
    command_date DATETIME                        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE commandes_produit (
    command_id INT NOT NULL,       
    produit_id INT NOT NULL,           
    quantite INT NOT NULL, 
    PRIMARY KEY (command_id, produit_id),
    FOREIGN KEY (command_id) REFERENCES commandes_utilisateur(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES produit(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci; 

IF NOT EXISTS


-- Création des tables
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    first_name VARCHAR(50) NOT NULL,            
    last_name VARCHAR(50) NOT NULL,            
    password VARCHAR(255) NOT NULL,                
    is_admin TINYINT(1) NOT NULL DEFAULT 0                       
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    categorie_name VARCHAR(50) NOT NULL            
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE produit (
    product_id INT AUTO_INCREMENT PRIMARY KEY,  
    product_name VARCHAR(50) NOT NULL,            
    prix FLOAT(4,2) NOT NULL,            
    FOREIGN KEY (categorie_id) REFERENCES categorie(id),
    img VARCHAR(200)                      
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE commandes_utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    FOREIGN KEY (user_id) REFERENCES utilisateur(id) ON DELETE CASCADE,
    command_date DATETIME                        
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE commandes_produit (
    commande_id INT NOT NULL,       
    produit_id INT NOT NULL,           
    quantite INT NOT NULL, 
    PRIMARY KEY (commande_id, produit_id),
    FOREIGN KEY (command_id) REFERENCES commandes(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES produit(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci; 