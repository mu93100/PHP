<?php
    /*Objectif pédagogique :
    Apprendre à utiliser les getters et setters.
    Comprendre la protection des données (encapsulation).
    Appliquer une règle de validation métier dans un setter.
    
    🧱 Structure attendue :
    Crée une classe nommée CompteBancaire
    Elle doit contenir 2 propriétés privées :
    $titulaire (type string) → le nom du propriétaire du compte.
    $solde (type float) → l'argent disponible sur le compte.
    Crée les méthodes getter et setter pour chaque propriété :
    getTitulaire() et setTitulaire(string $titulaire)
    getSolde() et setSolde(float $solde)
    Ajoute une vérification dans le setter du solde :
    Si on essaie de mettre un solde négatif, refuse-le et affiche un message 
    d’erreur (ex. "Erreur : le solde ne peut pas être négatif.")
    Cela simule une règle métier qu'on retrouve souvent dans les 
    applications bancaires.
    📌 Exemple d'utilisation dans le code :
    Tu devras :
    Créer un objet de type CompteBancaire
    Utiliser les setters pour définir le titulaire et le solde
    Utiliser les getters pour les afficher
    🔁 Bonus pour aller plus loin :
    On pourrait plus tard ajouter :
    Une méthode deposer($montant)
    Une méthode retirer($montant) qui ne permet pas de retirer plus que 
    ce qu’il y a sur le compte
*/
class CompteBancaire{
    private $titulaire; // nom du propriétaire du compte. is_string()
    private $solde; // argent disponible sur le compte is_float()

    public function __construct($a, $b){
        $this->titulaire = $a; // $this->setTitulaire($a);
        $this->setSolde($b);
    }
    public function getTitulaire()  { // on peut mettre     public function getTitulaire() : string 
        if (isset($this->titulaire)) {
            return ucfirst(is_string($this->titulaire)); // return __toString(ucfirst($this->titulaire));
            echo 'Nom du titulaire du compte : ' . $this->titulaire;
        } else {
            echo 'Veuillez renseigner le nom du titulaire du compte';
        }
    }
    public function getSolde() : float{
        return is_float($this->solde);
    }
    public function setTitulaire($e) { // setTitulaire => modifier le nom du titulaire DONC IL FAUT UN Nx NOM en param. 
        return $this->titulaire = $e;

    }
    public function setSolde($c) {
        if ($c<0) {
            echo "Erreur : le solde ne peut pas être négatif.";
        }else {
            return $this->solde = $c;
        }
        
    }
    public function deposerMontant($montant) {
        if (isset($montant) && $montant>0) {
            $this->solde += $montant;
        }
    }
    public function retirerMontant($montant) {
        if ($montant<0) {
            echo 'E R R E U R : le montant du retrait doit être supérieur à 0';
        }elseif ($this->solde<= $montant) {
            echo 'fonds insuffisant pour effectuer le retrait';
        }else{
            return $this->solde -= $montant;
        }
        
    }
}
$compte1 = new CompteBancaire("mama", 24.50);
var_dump($compte1);
$compte1->deposerMontant(20);

$compte1->getTitulaire();
$compte1->setTitulaire('lili');

$compte1->getSolde();
var_dump($compte1);
echo 'titulaire du compte : ' . $compte1->setTitulaire('moussa');
echo '<br>';
echo 'solde du compte '. $compte1->setTitulaire('moussa') . ' est ' . $compte1->setSolde(500);
echo '<br>';
echo 'Nx solde après retrait : ' . $compte1->retirerMontant(50);
var_dump($compte1);
/*--------------------------------------------------------------------------
| 💼 Exercice 1 — Classe Livre (Sans typage)
|--------------------------------------------------------------------------
| Objectif : Créer une classe PHP représentant un livre dans une bibliothèque.
| On n’utilise PAS de typage ici (compatible PHP 5+), pour bien se concentrer
| sur la structure orientée objet (POO) et les bonnes pratiques.
ÉNONCÉ ---------------------------------------------------------------
Créer une classe nommée `Livre` représentant un livre en bibliothèque.
🔹 Attributs attendus :
- titre        → Titre du livre (chaîne de caractère)
- auteur       → Nom de l’auteur (chaîne)
- annee        → Année de publication (entier)
- disponible   → Indique si le livre est disponible ou déjà emprunté (booléen)
🔸 Étapes :
1. Déclare toutes les propriétés comme `private`
2. Crée un constructeur pour initialiser les 4 propriétés
3. Crée un getter et un setter pour chaque propriété
4. Crée une méthode `afficherFiche()` qui retourne une phrase du style :
    "Titre : Le Petit Prince - Auteur : Antoine de Saint-Exupéry (1943). 
    Disponible ? Oui"
5. Crée une méthode `emprunter()` :
    - Si le livre est déjà emprunté → afficher "Livre déjà emprunté"
    - Sinon → marquer comme indisponible et afficher "Emprunt réussi"
6. Crée une méthode `rendre()` pour remettre le livre en disponible

exemple d'objet pour livre $livre1 = new Livre("1984", "George Orwell", 1949, true);
------------------------------------------------------------------------
EXEMPLE DE CODE ATTENDU :
------------------------------------------------------------------------
$livre = new Livre("1984", "George Orwell", 1949, true);
echo $livre->afficherFiche();   // Titre : 1984 - Auteur : George Orwell (1949). 
Disponible ? Oui
$livre->emprunter();            // Emprunt réussi
echo $livre->afficherFiche();   // Disponible ? Non
$livre->emprunter();            // Livre déjà emprunté
$livre->rendre();               // Le livre est de nouveau disponible

------------------------------------------------------------------------
BONUS (facultatif) :
------------------------------------------------------------------------
- Ajouter un compteur `nbEmprunts`
- Valider que l’année est > 1400 dans le setter
------------------------------------------------------------------------
*/
class Livre{
    private $titre;
    private string $auteur;
    private int $annee;
    private bool $disponible;
    private int $nbEmprunts;
    
    public function __construct($e, $f, $g, $h) {
        $this->setTitre($e);
        $this->setAuteur($f);
        $this->setAnnee($g);
        $this->setDispo($h);
        $this->nbEmprunts = 0;  // on met 0 car on compte le nb d'emprunts
    } // ---------------------GETTER  SETTER
    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($e){
        return $this->titre = $e;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function setAuteur($f) {
        return $this->auteur = $f;
    }
    public function getAnnee(){
        return $this->annee;
    }
    public function setAnnee($g) {
        return $this->annee = $g;
    }
    public function getDispo() : bool {
        return $this->disponible;
    }

    public function setDispo($h) : bool {
        return $this->disponible = $h;
        if($this->disponible === true){
            echo "Livre disponible : O U I";
        }else {
            echo "Livre disponible : N O N";
        }
    }
    public function afficherFiche() {
        echo "Titre : {$this->getTitre()} <br>Auteur : {$this->getAuteur()} ({$this->getAnnee()})<br>Disponible : " . ($this->getDispo() ? 'O U Ioui' : 'N O Nnon');
//on met GET car même si on a modifier les val avec SET, si on fait un GET après il a pris en Cpte la modif // voir l 207 à 209
// echo $besson2->getTitre();
// echo $besson2->setTitre("En l'absence des F E M Mes");
// echo $besson2->getTitre();
// +++ ON PEUT METTRE $this->getAuteur() OU $this->auteur
// $this->getDispo() ? 'O U Ioui' : 'N O Nnon' ::: $this->getDispo():::TRUE valeur par défaut
    }
    public function emprunter() {
        if ($this->disponible == false) {
            echo "le livre {$this->getTitre()} est à nouveau dispo";
        }else {
            $this->setDispo(false);
            echo "Emprunt réussi";
            $this->nbEmprunts++; // a chaque fois qu'ion emprunte un lib=vre ça incrémente de +1
        }
    }
    public function getNbEmprunts() {
        return $this->nbEmprunts;
    }
    public function rendre() {
        if ($this->disponible == false) {
            echo "Livre déjà emprunté";
        }else {
            $this->setDispo(false);
            echo "Emprunt réussi";
        }
    }
    public function rendreLivre(){
        $this->setDispo(true); //ou $this->disponible = true;
        echo "le livre {$this->getTitre()} est à nouveau dispo";
    }
}
$besson = new Livre('Son frère', 'Philippe Besson', 2001, true);
$besson2 = new Livre("En l'absence des hommes", 'Philippe Besson', 2001, false);
echo $besson2->getTitre();
echo $besson2->setTitre("En l'absence des F E M Mes");
echo $besson2->getTitre();
$besson2->emprunter();

echo "<br>";
var_dump($besson->getDispo());
$besson->afficherFiche();
echo "<br>";
var_dump($besson);
echo "<br>";
$besson->emprunter();
$besson->rendreLivre();
$besson->emprunter();
$besson->rendreLivre();
$besson->emprunter();
$besson->rendreLivre();
$besson->emprunter();
echo "<br>";
var_dump($besson);
echo $besson->getNbEmprunts();


?>