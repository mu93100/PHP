<style>*{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}</style>
<h2>Différence entre PHP procédural et POO - - - 
    programmation orientée objet</h2>

<ul>
    <li>PHP procédural est un language de programmation qu n'a pas de classes, de méthodes, de propriétés, de constructeurs, etc</li>
    <li> PHP procédural est un code écrit ligne par ligne avec des Fo et des var globales (var définie hors Fo /diff de var locale, ds Fo)</li>
    <li>enchainement d'instruction, cô recette de cuisine</li>
</ul>

<p>Ex :</p>
<?php
$nom = "Lydie";
$age = 8;

function direHello($a, $b) {
    echo "hello " . $a . ", tu as " . $b . " ans";
}
direHello($nom, $age);

// Avantages :
// Simple à comprendre
// Rapide pour petits scripts
// Facile à démarrer

// Inconvénients :
// Variables globales -> collisions, erreurs
// pas réutilisable
// diff à maintenir qd code devient + complexe => on crée les class


class Users{
    public $nom;
    public $age;
    public function __construct($a, $b){
        $this->nom = $a;
        $this->age = $b;
    }
    function direHello() {
        echo "hello " . $this->nom . ", tu as " . $this->age . " ans avec CLASS et OBJET";
    }
}

$user = new Users("Lydie", 8); //$user est un OBJET
$user->direHello();

$user1 = new Users('alice', 25);
$user1->direHello();
?>
<p>La prog. orientée objet (POO) est un  de prog. (= une méthode de prog.) qui permet de mieux organiser le code, de le rendre + réutilisable, modulaire et maintenable</p>
<p> Une classe est une structure qui définit un objet, c'est le modèle à partir duquel des objets (instances) sont créés</p>
<p>On la déclare avec le mot-clé <code>class</code></p>
<p>CLASS -> nom avec Maj</p>
<p>propriétés --> public (ou private) $marque</p>
<p>method     --> fonctions</p>
<p>création de l'objet A L'EXTERIEUR DE LA CLASSE</p>
<p>Ex. de class</p>
<?php
class Voiture{
    // propriétés
    public $marque;
    public $couleur;

    // method    
    public function klaxonner(){
        echo "tuut tuut !";
    }    
}

// créer un objet à partir d'une classe
$maVoiture = new Voiture(); // $maVoiture === OBJET
$maVoiture->marque = "Peugeot";// -> on accède aux propiétés de class Voiture
$maVoiture->couleur = "rose"; // -> on accède aux propiétés de class Voiture
$maVoiture->klaxonner() ; // -> on accède à la method de class Voiture

echo "<pre>";
print_r($maVoiture);
echo "</pre>";


class Car{
    public $marque; // propriété ou attribut
    public $couleur;

    public function __construct($a,$b){
        $this->marque = $a;
        $this->couleur = $b;
    }
    public function demarrer(){
        echo "La {$this->marque} {$this->couleur} démarre";
    }
}

$new_car = new Car("Volvo 480", "moutarde"); // $new_car === OBJET
$new_car->demarrer();

// on peut aussi faire des echos cô ça ::: avec ->
echo "on peut aussi faire des echos cô ça ::: " . $new_car->marque;

echo "<pre>";
print_r($new_car);
echo "</pre>";
?>
<h4>__construct</h4>
<p>avec  __construct, on utilise $this qui représente l'objet ($new_car, $maVoiture, $user)</p>
<p>la méthode __construct ::: méthode magique automatiquement appelée lors de la création d'un objet <br> 
permet d'initialiser les propriétés de l'objet</p>

<h4>$this->marque</h4>
<p>cela fait réf. à la propriété (public $marque) de la classe Car</p>

<h4>public $marque</h4>
<p>Déclare une propriété ds la class MAIS APPARTIENT A CHAQUE OBJET (== instance de la classe)</p>
<ul><li>
    Elle est définie ds la class (c'est son plan de construction),
mais elle est instanciée ds chaque objet que tu crées à partir de cette classe</li></ul>

<p>c'est cô si on disait : propriété marque de cet objet -> prends la val. de ce que je viens de recevoir ds le paramètre $a</p>

<!-- Exercice 1 : Créer une classe Personne avec deux propriétés : nom et age.
Ajoute un constructeur pour initialiser ces propriétés.
Crée une méthode sePresenter() qui affiche une phrase comme : "Bonjour, je m'appelle ..... j 'ai ..... ans." -->
<?php
class Personne{
    public $nom;
    public $age;

    public function __construct($a, $b) {
        $this->nom = $a;
        $this->age = $b;
    }
    public function sePresenter(){
        echo "Bonjour, je m'appelle {$this->nom} j'ai {$this->age} ans.";
        if ($this->age>=18){
                echo " je suis MAJeur";
            } else {
            echo " je suis mineur";
    }   
    }
}
$Personne1 = new Personne("Ali", 8);
$Personne1->sePresenter();
?>
<h4>Propriétés et méthodes</h4>
<p>propriétés ::: var. de la class</p>
<p>méthodes ::: Fo de la class</p>

<h4>Portée des propriétés et des method</h4>
<p>la portée des propriétés et des method, détermine l'accés à ces propriétés et méthod</p>
<li>public ::: accessible partout</li>
<li>private ::: accessible uniquement ds la class</li>
<li>protected ::: accessible uniquement ds la class et ds les class enfants</li>

<p>PRIVATE AVEC GET ET SET pour modifier la propriété</p>
<?php
class Animal{
    private $espece;
    public function __construct($a) {
        $this->espece = $a;
    }
    public function getEspece() {
        return $this->espece;
    }
    // __toString() ::: method magique qui permet de convertir l'objet en string
    public function __toString() {
        return "L'animal est de l'espèce {$this->espece}";
    }
}
$chat = new Animal("chat");
echo $chat;

class Animaux {
    private $espece;
public function __construct($a) {
    $this->espece = $a;
}
public function getEspece() {
    return ucfirst($this->espece);
}
public function setEspece($a) {
    $especeValide=["chat", "chien", "oiseau", "reptile"];

    if (in_array($a, $especeValide)) {
        $this->espece = $a;
    }else{
        echo "espèce animaUX invalide <br>";
    }
}
// __toString() est une méthode magique qui permet de convertir l'objet en string
public function __toString()
{
    return "L'animaUX est de l'espèce " . $this->espece;
}
}
$chat = new Animaux("chat");
echo $chat;

echo $chat->getEspece();
echo "<br>";
$chat->setEspece("lapin");
?>
<p>PRIVATE AVEC GET ET SET pour modifier la propriété<br> GET --> prendre<br>SET --> modifier</p>
<p>(private $espece :: la Pté est protégée, on ne peut pas y accéder directement, on est obligé de passer par getter et setter)</p>
<p>setEspece() :: méthode de contrôle, vérifie si la val. est correcte</p>
<p>getEspece() :: méthode de lecture, retourne la val. de la propriété</p>
<h4>Getter : permet de lire (accéder à )la Pté privée</h4>
<h4>Setter : permet de modifier la Pté privée, avec ou sans sécurité</h4>
<h4>Pourquoi ne pas mettre simplement les propriétés en public ?</h4>
<p>Parce que c'est moins sécurisé, on peut modifier la propriété directement, sans passer par le setter.</p>
<p>On ne peut plus controller ce qu'on y met</p>

<p>Exercice 2 : Classe Rectangle
Consigne :
Crée une classe Rectangle avec les propriétés longueur et largeur.
Ajoute une méthode getSurface() qui retourne la surface du rectangle.</p>
<?php

class Rectangle{
    private $longueur;
    private $largeur;

    public function __construct($a, $b) {
        $this->longueur = $a;
        $this->largeur = $b;
    }
    public function getSurface() {
        if (is_numeric($this->longueur) && is_numeric($this->largeur)) {
            return  $this->longueur * $this->largeur . "numeric OK";
        } else{ return "val. non muméric";}
        
    }

}
$Rectangle1 = new Rectangle(12, 6);
echo $Rectangle1->getSurface();
// on ne peut pas faire echo $Rectangle1 car echo n'affiche que des strings

?>

<p>Créer une classe Voiture qui respecte les bonnes pratiques d'encapsulation :
marque est publique
vitesseMax est privée
Crée des getters et setters pour accéder à la vitesse maximale
Empêche qu'on entre une vitesse négative ❗</p>
<?php
class Voiture2{
    public $marque;
    private $vitesseMax;

    public function __construct($c, $d) {
        $this->marque = $c;
        $this->vitesseMax = $d;
    }
    public function getVitesse($d) {
        if ($this->vitesseMax>0) {
            echo "vitesse de $this->marque est $this->vitesseMax";
        } else{ "❗ revoir la vitesse renseignée ❗";}
    }
    public function setVitesse() {
        
    }
}

//correction FFA

class Voiture3 {
    public string $marque;
    private int $vitesseMax;
    public function __construct(string $marque, int $vitesseMax) {
        $this->marque = $marque;
        $this->setVitesseMax($vitesseMax); // on utilise le setter pour appliquer la vérification
    }
    // Getter pour la vitesse
    public function getVitesseMax(): int {
        return $this->vitesseMax;
    }
    // Setter avec vérification
    public function setVitesseMax(int $vitesse): void {
        if ($vitesse >= 0) {
            $this->vitesseMax = $vitesse;
        } else {
            echo "❌ Vitesse invalide. Elle doit être >= 0 km/h.<br>";
        }
    }
    public function afficherInfos(): void {
        echo "🚗 Marque : {$this->marque} <br>";
        echo "💨 Vitesse Max : {$this->getVitesseMax()} km/h <br>";
    }
}
// Utilisation
$voiture4 = new Voiture3("Toyota", 220);
$voiture4->afficherInfos();
echo "<hr>";
// Tentative de mettre une vitesse négative
$voiture4->setVitesseMax(-50); // Ne devrait pas être acceptée
$voiture4->afficherInfos();



// Créer une classe Etudiant :
// nom (public)
// note (privée, sur 20)
// Un getter/setter pour la note
// Le setter refuse une note < 0 ou > 20
// Une méthode afficherMention() :
// "Très bien" si ≥ 16
// "Bien" si ≥ 14
// "Assez bien" si ≥ 12
// "Passable" si ≥ 10
// "Échec" sinon
class Etudiant{
    public $nom;
    private $note;

    public function __construct($m, $n){
        $this->nom = $m;
        $this->note = $n;
    }
    public function getNote() {
        return $this->note;
        // echo $this->nom . " a la note " . $this->note;
    }
    public function setNote($a) {
        $this->note = $a;
    }
}

// corrigé nawel

// class Etudiant{
//     public $nom;
//     private $notes;
//     public function __construct($a,$b)
//     {
//         $this->nom = $a;
//         $this->setnotes($b);
//     }
//     public function getnotes(){
//         return $this->notes;
//     }
//     public function setnotes($c){
//         if(($c >= 0) && ($c <= 20)){
//             $this->notes=$c;
//         }else{
//             echo "note pas comprise entre 0 et 20 ❗ <br>";
//         }
//     }
//     public function AfficherMention(){
//         if($this->notes >=16){
//             echo "Mention très bien <br>";
//         }elseif ($this->notes >=14){
//             echo "Mention bien <br>";
//         }elseif ($this->notes >=12){
//             echo "Mention Assez bien <br>";
//         }elseif ($this->notes >=10){
//             echo "Mention Passable <br>";
//         }else{
//             echo "Echec <br>";
//         }
//     }
// }

// $Etudiant1 = new Etudiant("Nawel", 20);
// var_dump($Etudiant1) ;
// $Etudiant1->AfficherMention();

?>
