<?php
// ================================================================
//  Définitions PHP Orienté Objet
// ================================================================
/**
* ➡️ CLASS
*
* Une class est un modèle (un plan) qui définit des propriétés (attributs) et des méthodes (comportements).
* Elle sert à fabriquer des objets.
* Exemple :
* class Voiture { ... }
*/
/**
* ➡️ OBJET
*
* Un objet est une instance concrète d'une classe.
* C'est une variable basée sur un modèle défini par une class.
* Exemple :
* $voiture1 = new Voiture();
*/
/**
* ➡️ CONSTANTE
*
* Une constante est une valeur qui ne change pas pendant l'exécution du programme.
* Elle se déclare avec `const` dans une classe.
* Exemple :
* public const TYPE = "Vehicule";
*/
/**
* ➡️ HERITAGE
*
* L'héritage permet à une classe d'hériter des propriétés et des méthodes d'une autre classe.
* Cela évite de dupliquer du code.
* Exemple :
* class Moto extends Vehicule { ... }
*/
/**
* ➡️ INSTANCIATION
*
* L'instanciation est le fait de créer un objet basé sur une classe.
* Cela se fait avec `new`.
* Exemple :
* $moto = new Moto();
*/
/**
* ➡️ METHODE
*
* Une méthode est une fonction définie à l'intérieur d'une classe.
* Elle représente un comportement ou une action sur l'objet.
* Exemple :
* public function demarrer() { ... }
*/
/**
* ➡️ METHODE MAGIQUE
*
* Les méthodes magiques sont des méthodes spéciales prédéfinies en PHP.
* Elles commencent et finissent par deux underscores __.
* Elles sont appelées automatiquement dans certaines situations (création, accès, appel de méthode inconnue, etc.)
* Exemples :
* - __construct()  ➔ appelée à la création de l'objet
* - __destruct()   ➔ appelée à la destruction de l'objet
* - __get(), __set(), __call(), __clone(), __invoke(), etc.
*/
/**
* ➡️ PUBLIC
*
* Le mot-clé public rend la propriété ou la méthode accessible de partout (dans et hors de la classe).
* Exemple :
* public $marque;
*/
/**
* ➡️ PRIVATE
*
* Le mot-clé private rend la propriété ou la méthode accessible uniquement à l'intérieur de la classe où elle est définie.
* Exemple :
* private $moteur;
*/
/**
* ➡️ PROTECTED
*
* Le mot-clé protected rend la propriété ou la méthode accessible uniquement à l'intérieur de la classe
* et des classes qui héritent de cette classe (héritage).
* Exemple :
* protected $vitesse;
*/
// ================================================================
//
// ================================================================
?>
<?php

// ============================================
// Cours Complet : Les Méthodes Magiques en PHP
// PHP Orienté Objet
// Fichier 100% exécutable pour apprentissage
// ============================================

/**
 * 📚 Définition :
 *
 * En PHP, une "méthode magique" est une méthode spéciale :
 * - Elle commence et finit par deux underscores (__)
 * - Elle est automatiquement appelée par PHP
 * - Elle réagit à certains évènements sur l'objet (création, lecture de propriété, appel de méthode inconnue, etc.)
 *
 * 💬 Elles permettent d'ajouter du comportement automatique dans ton code objet.
 */
class Magie {
    public $visible = "Je suis une propriété publique !";

    // ===========================================
    // 1. __construct() - Initialisation de l'objet
    // ===========================================
    public function __construct() {
        echo "[__construct] ➜ L’objet est instancié.<br>";
    }
    // =====================================
    // 2. __destruct() - Nettoyage à la fin
    // =====================================
    public function __destruct() {
        echo "[__destruct] ➜ L’objet est détruit automatiquement.<br>";
    }
    // ==================================================
    // 3. __get() - Lecture d'une propriété inaccessible
    // ==================================================
    public function __get($propriete) {
        echo "[__get] ➜ La propriété '$propriete' est inaccessible ou inexistante.<br>";
    }
    // =========================================================
    // 4. __set() - Affectation d'une propriété inaccessible
    // =========================================================
    public function __set($propriete, $valeur) {
        echo "[__set] ➜ Vous essayez de définir '$propriete' à la valeur '$valeur'.<br>";
    }
    // ===============================================================
    // 5. __isset() - Vérification isset() ou empty() sur propriété inaccessible
    // ===============================================================
    public function __isset($propriete) {
        echo "[__isset] ➜ isset() appelé sur '$propriete'.<br>";
        return false;
    }
    // ==================================================
    // 6. __unset() - Suppression d'une propriété inaccessible
    // ==================================================
    public function __unset($propriete) {
        echo "[__unset] ➜ unset() appelé sur '$propriete'.<br>";
    }
    // ==========================================
    // 7. __call() - Appel de méthode non définie
    // ==========================================
    public function __call($nom, $arguments) {
        echo "[__call] ➜ Méthode '$nom' appelée avec arguments : " . implode(', ', $arguments) . "<br>";
    }
    // ====================================================
    // 8. __callStatic() - Appel de méthode statique inconnue
    // ====================================================
    public static function __callStatic($nom, $arguments) {
        echo "[__callStatic] ➜ Appel statique de '$nom' avec arguments : " . implode(', ', $arguments) . "<br>";
    }
    // ================================================
    // 9. __toString() - Conversion de l’objet en texte
    // ================================================
    public function __toString() {
        return "[__toString] ➜ Objet converti en texte.<br>";
    }
    // ==========================================
    // 10. __invoke() - Appeler l'objet comme une fonction
    // ==========================================
    public function __invoke($param) {
        echo "[__invoke] ➜ Objet appelé comme une fonction avec argument : $param<br>";
    }
    // ===================================
    // 11. __clone() - Clonage de l'objet
    // ===================================
    public function __clone() {
        echo "[__clone] ➜ Clonage de l’objet effectué !<br>";
    }
}
// ===============================
// ✨ Tests pratiques des méthodes
// ===============================
echo "<h2>🔮 Test des Méthodes Magiques</h2>";

$obj = new Magie(); // __construct est appelé automatiquement

// __get
echo $obj->invisible; // propriété inexistante ➔ __get() est déclenché

// __set
$obj->secret = "top secret"; // propriété inexistante ➔ __set() est déclenché

// __isset
isset($obj->cache); // propriété inexistante ➔ __isset() est déclenché

// __unset
unset($obj->cache); // propriété inexistante ➔ __unset() est déclenché

// __call
$obj->lancerSort("abracadabra", 2025); // méthode inexistante ➔ __call() est déclenché

// __callStatic
Magie::appelStatique("boom"); // méthode statique inexistante ➔ __callStatic() est déclenché

// __toString
echo $obj; // objet converti en texte ➔ __toString()

// __invoke
$obj("invoqué"); // objet utilisé comme une fonction ➔ __invoke()

// __clone
$copie = clone $obj; // clonage ➔ __clone()

// Fin du script : __destruct() sera appelé automatiquement
?>
