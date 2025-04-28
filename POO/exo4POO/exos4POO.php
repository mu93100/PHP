<?php

abstract class Vehicule{
    public const CATEGORIE = "Général";
    protected string $marque;
    protected string $modele;
    protected int $annee;

    function __construct($a, $b, $c){
        $this->marque = $a;
        $this->modele = $b;
        $this->annee = $c;  
    }
    public function afficherDetails($a, $b, $c) : string {
        return '<li>- Marque : {$this->marque}</li><li>- Modèle : {$this->modele}</li><li>- Année : {$this->annee}</li> ';
        return "- Catégorie " . static::CATEGORIE;
    }
    public static function nombreDeRoues() : int {
        return 4;
    }
};

class Moto extends Vehicule{
    public const CATEGORIE = "Moto";
    public static function nombreDeRoues() : int {
        return 2;
    }
    public function afficherDetails($a, $b, $c) : string {
        parent::afficherDetails();
        return "❗ Attention : équipement obligatoire pour la moto ❗";
        }
}
final class Voiture extends Vehicule{
    public const CATEGORIE = "Voiture";
}

class Camion extends Vehicule{
    public const CATEGORIE = "Camion";
    public static function nombreDeRoues() : int {
        return 6;
    }
    public function afficherDetails($a, $b, $c) : string {
        parent::afficherDetails();
        return "❗ Camion soumis à réglementation de charge ❗";
        }
}


/**
* Exercice PHP POO - Héritage, Constantes, Typage, Static, Abstract, Final
* ============================================================
* 🎯 Objectif :
* Créer un gestionnaire de véhicules en PHP en utilisant :
* - Héritage (extends)
* - Constantes de classe (const)
* - Méthodes statiques (static function)
* - Typage strict (string, int, float)
* - Propriété statique (static)
* - Abstract pour la classe parente
* - Final pour bloquer certaines classes
* - Redéfinition
* ============================================================
* 📚 Instructions :
*
* 1. Crée une **classe abstraite** `Vehicule`
*    - Constante `public const CATEGORIE = "Général"`
*    - Propriétés typées :
*         - `string $marque`
*         - `string $modele`
*         - `int $annee`
*    - Un constructeur pour initialiser ces propriétés.
*    - Une méthode publique `afficherDetails()` qui retourne une chaîne de caractères formatée :
*         - Marque
*         - Modèle
*         - Année
*         - Catégorie (avec `static::CATEGORIE`)
*    - Une méthode statique `nombreDeRoues()` qui retourne `4` par défaut.



* 2. Crée trois classes enfants de `Vehicule` :
*
*    - `Moto` :
*        - Redéfinit `public const CATEGORIE = "Moto"`
*        - Redéfinit `public static function nombreDeRoues()` ➔ retourne `2`
*        - **Redéfinit la méthode `afficherDetails()`** pour ajouter "Attention : équipement obligatoire pour la moto."
*
*    - `Voiture` (**final class**) :
*        - Redéfinit `public const CATEGORIE = "Voiture"`
*        - Ne redéfinit pas `nombreDeRoues()`
*
*    - `Camion` :
*        - Redéfinit `public const CATEGORIE = "Camion"`
*        - Redéfinit `public static function nombreDeRoues()` ➔ retourne `6`
*        - **Redéfinit la méthode `afficherDetails()`** pour afficher aussi "Camion soumis à réglementation de charge."
*
* 3. Crée un fichier de test `gestionnaire.php` :
*
*    Dans ce fichier, tu devras charger les classes pour pouvoir les utiliser :
*
*    ✅ **Sans Composer (manuel)** :
*    - Utiliser `require_once` pour inclure chaque fichier PHP.
*    Exemple :
*      ```php
*      require_once 'Vehicule.php';
*      require_once 'Moto.php';
*      require_once 'Voiture.php';
*      require_once 'Camion.php';
*      ```
*projet/
* ├─ Vehicule.php
* ├─ Moto.php
* ├─ Voiture.php
* ├─ Camion.php
* ├─ gestionnaire.php
*
* **********************************************************************
*    ✅ **Avec Composer et Namespace (pro)** :
*    - Utiliser un namespace pour chaque classe (exemple : `App\Vehicules\`)
*    - Charger automatiquement avec :
*      ```php
*      require_once __DIR__ . '/../vendor/autoload.php';
*      ```
*    - Importer les classes avec `use` :
*      ```php
*      use App\Vehicules\Moto;
*      use App\Vehicules\Voiture;
*      use App\Vehicules\Camion;
*
* /mon-projet-vehicules/
  * ├── composer.json
  * ├── /src/
  * │   └── /Vehicules/
  * │       ├── Vehicule.php
  * │       ├── Moto.php
  * │       ├── Voiture.php
  * │       └── Camion.php
  * ├── /public/
  * │   └── gestionnaire.php
  * ├── /vendor/       (généré par Composer)
  * │   └── autoload.php (et les dépendances)
  * ├── .gitignore
  * ├── README.md
*      ```
*******************************************************
*    Dans les deux cas, tu dois :
*    - Instancier une `Moto`, une `Voiture`, et un `Camion`
*    - Appeler `afficherDetails()` pour chaque objet
*    - Afficher aussi `nombreDeRoues()` sans instancier (ex: `Moto::nombreDeRoues()`)
*
* 4. Bonus facultatif :
*
*    - Ajouter une méthode publique `estRecent()` ➔ retourne `true` si l'année est supérieure à 2015
*    - Protéger l'année dans le constructeur (pas d'année < 1900, sinon lever une Exception)
*
* ============================================================
*
* ✨ Exemple d'affichage attendu :
*
* Moto :
* Marque : Yamaha
* Modèle : MT-07
* Année : 2020
* Catégorie : Moto
* Attention : équipement obligatoire pour la moto.
* Nombre de roues : 2
*
* Voiture :
* Marque : Tesla
* Modèle : Model 3
* Année : 2022
* Catégorie : Voiture
* Nombre de roues : 4
*
* Camion :
* Marque : Volvo
* Modèle : FH16
* Année : 2018
* Catégorie : Camion
* Camion soumis à réglementation de charge.
* Nombre de roues : 6
*
*/
?>