<!-- | 🧪 Exercices PHP – POO : classes, getters/setters, héritage, abstract, etc.
|--------------------------------------------------------------------------
| Ce fichier contient 10 exercices pédagogiques pour pratiquer la POO en PHP.
| Chaque exercice est clairement commenté pour comprendre l'objectif.
| À exécuter et compléter en local pour s'entraîner.
*/
echo "<h1>🧪 Exercices PHP – Programmation Orientée Objet</h1>";
/*
* 🔹 Exercice 1 : Classe simple + constructeur
* Crée une classe Utilisateur avec un nom et un email passés via le constructeur.
* Affiche ensuite ces informations avec une méthode afficherProfil().
*/ -->
<?php
class Utilisateur{
    public string $nom;
    public string $email;

    public function __construct($a, $b){
        $this->nom = $a;
        $this->email = $b;
    }
    public function afficherProfil() {
        echo 'Nom : ' . $this->nom .' <br> Email : ' . $this->email;
    }
}
$utilisateur1 = new Utilisateur("Flye", "jeanfly@gmail.com");
$utilisateur1->afficherProfil();



// <!-- // * 🔹 Exercice 2 : Getters et Setters
// // * Crée une classe Produit avec un prix privé. Ajoute des getters et setters.
// // * Utilise-les pour définir un prix, puis l'afficher.
// */


class Produit{
    public string $nom;
    private float $prix;

    public function __construct(string $c, float $d){
        $this->nom = $c;
        $this->prix = $d;
    }
    public function getProduit() {
        $this->nom;
        $this->prix;
        echo 'Nom du produit : ' . $this->nom .' <br>prix : ' . $this->prix . '£';
    }
    public function setProduit(string $e, float $f) {
        $this->nom = $e;
        $this->prix = $f;
        echo 'Nom du produit modifié: ' . $this->nom .' <br>prix : ' . $this->prix . '£';
    }
}
echo "M M M M ";
$produit1 = new Produit("rivet", 1.23);
echo "<pre>";
print_r($produit1);
echo "</pre>";
$produit1->getProduit();
echo "<pre>";
print_r($produit1);
echo "</pre>";
$produit1->setProduit("GROS rivets", 1.55);
echo "<br>";

// /*
// * 🔹 Exercice 3 : Héritage simple
// * Crée une classe Vehicule avec une méthode rouler().
// * Crée une classe Voiture qui hérite de Vehicule, et ajoute une méthode klaxonner().
// * Instancie une Voiture et appelle les deux méthodes.
// */
class Vehicule{
    public function rouler()  {
        echo "R O U L E M A P O U L E <br>";
    }
}
class Voiture extends Vehicule{
    public function klaxonner()  {
        echo "tuut T U U T";
    }
}
$voit = new Voiture();
$voit->rouler();
$voit->klaxonner();
echo "<br>";
// /*
// * 🔹 Exercice 4 : Redéfinir une méthode (override)
// * Crée une classe Animal avec une méthode parler() qui dit "Je fais un bruit".
// * Crée une classe Chat qui hérite de Animal et redéfinit parler() pour dire "Miaou".
// */
class Animal{
    public function parler() : void{
        echo "Je fais un bruit";
    }
}

class Chat extends Animal{
    public function parler() : void{ 
        echo "😁 Miaou !<br>";
    }
    
}
$animalmal = new Animal();
$animalmal->parler();
echo "<br>";
$chacha = new Chat();
$chacha->parler();
echo "<br>";

// /*
// * 🔹 Exercice 5 : Utiliser parent:: dans une redéfinition
// * Dans une classe Chien qui hérite de Animal, redéfinis parler() :
// * appelle parent::parler() puis ajoute " et j'aboie !".
// */
class Chien extends Animal{
    public function parler() : void {
        parent::parler();  // on appelle d'abord la method du parent (Animal)
        echo "🐩🐩🐩🐕🐕‍🦺🦮 et j'aboie !<br>"; // on modifie la Fo
    }
}
$chienchien = new chien();
$chienchien->parler();
// /*
// * 🔹 Exercice 6 : Classe abstraite
// * Crée une classe abstraite Forme avec une méthode abstraite afficherNom().
// * Crée deux classes Cercle et Carre qui héritent de Forme et implémentent afficherNom().
// */
abstract class Forme{
    protected string $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }
    abstract public function afficherNom();
}
class Cercle extends Forme{
    public function afficherNom() : void {
        echo "😀: " . $this->nom;
    }
}
class Carre extends Forme{
    public function afficherNom() : void {
        echo "🧧🧱: " . $this->nom;
    }
}
$carre =new Carre("lolo");
$carre->afficherNom();
$carre =new Cercle("cercle");
$carre->afficherNom();
echo "<br>";
// /*
// * 🔹 Exercice 7 : Propriété protégée
// * Crée une classe Compte avec une propriété protégée solde.
// * Ajoute une méthode deposer() dans une classe enfant CompteCourant.
// * Teste le dépôt et affiche le solde.
// */

abstract class Compte{
    protected $solde;
    public function __construct($solde) {
        $this->solde = $solde;
    }
    public function deposer($a){
        if($a>0){
            return " Le solde est de : " .$this->solde += $a ;
    }else{
            echo "Error : votre depot est negatif";
        }
    }
}
class CompteCourant extends Compte{
}
$compte1 = new CompteCourant(100);
echo $compte1->deposer(1000);
echo "<br>";
// /*
// * 🔹 Exercice 8 : Méthode
// * Crée une classe Logger en `final` avec une méthode log(). logger :::mess d'erreur
// * Tente de créer une classe fille qui hérite de Logger et observe le blocage.
// */
final class Logger{
    public function log($a) :int|string{
        echo $a;
    }
}
// class FilleLogger extends Logger{
//     public function log() {
//         echo "🧱🧱🧱🧱🧱";
//     }
// }
// $logger = new Logger();
// $logger->log("hhh 404");
// $FilleLogger = new FilleLogger();
// $FilleLogger->log();
// echo "<br>";
// /*
// * 🔹 Exercice 10 : Encapsulation complète
// * Crée une classe Banque avec des propriétés privées (nomClient, solde).
// * Implémente des getters/setters et une méthode transfert() entre deux comptes.finale
// * Crée une classe Base avec une méthode finale identifiant().
// * Essaie de redéfinir cette méthode dans une classe enfant : observe l'erreur.
// */
class Banque{
    private string $nomClient; 
    private float $solde;

    public function __construct(string $nomClient, float $solde){
        $this->nomClient = $nomClient;
        $this->solde = $solde;
    }
    public function getNomClient() : string {
        return $this->nomClient;
    }
    public function setNomClient(string $nomClient) : string {
        return $this->nomClient = $nomClient;
    }
    public function getSolde() : float {
        return $this->solde;
    }
    public function setSolde(float $solde) : float {
        return $this->solde = $solde;
    }
    
}
corrigé FAFA
class Banque
{
    private string $nomClient;
    private float $solde;
    public function __construct(string $nomClient, float $solde)
    {
        $this->nomClient = $nomClient;
        $this->solde = $solde;
    }
    // getter
    public function getNomClient() : string
    {
        return $this->nomClient;
    }
    public function getSolde() : float
    {
        return $this->solde;
    }
    public function setSolde(float $solde) : float
    {
        return $this->solde = $solde;
    }
    public function setNomClient(string $nomClient) : string
    {
        return $this->nomClient = $nomClient;
    }
public function transfert(Banque $destinataire, float $montant) : void // ici je fait un typage d'objet Banque, je demande un objet issu de Banque
    {
        if($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            $destinataire->solde += $montant;
        }else {
            echo "le solde est insuffisant";
        }
    }
}
$compte1= new Banque("najiba",150000);
$compte2= new Banque("facundo",2);
echo $compte2->getSolde(). "<br>";
echo $compte1->getSolde(). "<br>";
$compte1->transfert($compte2, 100000);
echo $compte2->getSolde(). "<br>";
echo $compte1->getSolde(). "<br>";
?>


// /*
// * 🔹 Exercice 10 : Encapsulation complète
// * Crée une classe Banque avec des propriétés privées (nomClient, solde).
// * Implémente des getters/setters et une méthode transfert() entre deux comptes. 
?>