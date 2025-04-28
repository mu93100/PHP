<?php namespace App; ?> // si jamais on a déjà utilisé ds d'autres fichiers la class Chien Chat Animal

<h1>Héritage des classes en PHP</h1>
<h4>Héritage c'est quoi ?</h4>

<p>L'héritage permet à une class d'hériter des propriétés et méthodes d'une autre class</p>
<p>class Animal ::: class mère</p>
<p>class Chat Chien ETC ::: class CHD</p>

<p>
Caractéristique	Détail
Instanciation	        ❌ Impossible d’instancier une classe abstraite directement
Héritage obligatoire	✅ Doit être étendue (extends) par une autre classe
Méthodes abstraites	    ❗ Doivent être définies dans les classes enfants
Objectif	             Fournir une base commune / un contrat de développement
</p>

<h4>EX ::</h4>

<?php

class Animal{
    public function respirer() {
        echo " BREATH ANIMAL je respire dans l'air<br>";
    }
}
class Chien extends Animal{
    public function aboyer() : void{
        echo "O U A F  OUAF <br>";
    }
}
class Chat extends Animal{
    public function miauler() : void {
        echo "m i A O U <br>";
    }
}
$chien1 = new Chien();
$chien1->respirer();
$chien1->aboyer() ;
?>
<h3>Redéfinir une méthod (Override)</h3>
<?php 
class Poisson extends Animal{
    // CAS 1 --> redéfinition complete de la method == ON ECRASE la version parente QUE sur la class Poisson
    public function respirer() : void {
        echo "🥽 je respire ds l'eau <br>";
    }
}
class Reptil extends Animal{
    // CAS 2 --> avec parent::respirer() ON RAJOUTE QQue chose à la version du parent (on enrichie)

public function respirer() : void {
    parent::respirer();  // on appelle d'abord la method du parent (Animal)
    echo "😁 et ds l'eau !<br>"; // on modifie la Fo
}
}
$poisson1 = new Poisson();
$poisson1->respirer();
$reptil1 = new Reptil();
$reptil1->respirer();


class Vehicule{
    public string $marque ="sans marque";
    protected int $vitesse = 0;
    private string $moteur = "sans moteur";

    public function getMoteur() : string {
        return $this->moteur;
    }
    public function setMoteur(string $moteur) : string {
        return $this->moteur = $moteur;
    }
    public function accelerer() : void {
        $this->vitesse+=10;
        echo "Vitesse actuelle : {$this->vitesse} km/h<br>";
    }
}

class Voiture extends Vehicule{
    public function turbo() : void {
        $this->vitesse+=50;
        echo "Vitesse actuelle avec turbo : {$this->vitesse} km/h<br>";
    }

    public function setterMoteur(string $moteur) {
        return $this->setMoteur($moteur);// parent::setMoteur($moteur);
    }
    public function afficheMoteur() : void {
        echo "moteur : {$this->getMoteur()}<br>"; // cô $moteur est en private on doit passer par getter setter
    }
}   
$voiture1 = new Voiture();
echo "Voiture1 moteur : {$voiture1->setterMoteur("essence")} <br>";
$voiture1->accelerer();
$voiture1->turbo()

?>
<h2>abstract class</h2>
<p>Une class abstraite ne peut pas être instanciée (pas de Nlle version de cet objet)</p>
<p> Elle sert de modèle aux class qui l'étendent et peut contenir :</p>
<li>des method normales avec du code</li>
<li>des method abstraites sans code (à définir obligatoirement, et qui sont continuées)</li>
<li>avec astract class ::: on est obligé de mettre protected Ptés
    
</li>
<br><br>

<?php
abstract class AnimalAA {
    protected string $nom;
    public function __construct(string $nom) {
        $this->nom = $nom;
    }
    abstract public function crier(); // Méthode abstraite : aucune implémentation ici
    
    public function sePresenter() { // Méthode normale : peut être utilisée telle quelle
        echo "Je suis un animal nommé $this->nom<br>";
    }
}
class ChienAA extends AnimalAA {
    public function crier() {
        echo "Ouaf Ouaf 🐶<br>";
    }
}

$rex = new ChienAA("Rex");
$rex->sePresenter();
$rex->crier();
?>

<h2>Utilisation de final</h2>
<p>Le mot clé final empêche l'héritage /la surcharge (redéfinition) d'une method</p>
<p>Peut être utilisée sur class, method, propriétés</p>
<p>avec final devant class --> on ne peut pas créer de class enfant de cette classe<br>
final class MaClassFinal{ };    <br>
class MaClassFinalEnfant extends MaClassFinal{PAS POSSIBLE} <br>
</p>
<p>avec final devant method     <br>
--> la class enfant peut utiliser la method mais pas la modifier avec parent::method(), ni l'écraser<br>
<li>pour vérouiller un comportement spécifique qui ne doit pas être modifié</li>
<li>Pour garantir la sécu des données</li>
<li>Pour éviter les erreurs et abus d'héritage</li>
</p>
<?php
class Employe{
    protected string $nom;
    public function __construct(string $nom) {
        $this->nom = $nom;
    }
    final public function travailler()
    {
        echo "$this->nom travaille sérieusement.<br>";
    }
}
class Manager extends Employe
{
    // ❌ ERREUR ! On ne peut pas redéfinir une méthode final
    /*
    public function travailler() {
        echo "$this->nom travaille en dirigeant l'équipe.<br>";
    }
    */
    public function diriger()
    {
        echo "$this->nom dirige une équipe.<br>";
    }
}
$m = new Manager("Sophie");
$m->travailler(); // fonctionne
$m->diriger();
?>
<h2>Trait</h2>
<p>trait en PHP est une sorte de bloc de code réutilisable.</p>
<p>Il permet de partager des méthodes ou propriétés entre plusieurs classes,
sans avoir à utiliser l'héritage (extends).<br>
Contrairement à une classe, un trait ne peut pas être instancié directement.<br>
On l’utilise dans une classe avec le mot-clé "use".<br>
C’est très utile quand plusieurs classes ont des comportements identiques,
mais qu’elles n’ont pas de lien logique pour hériter d’une même classe.<br>
Exemple :</p>
<?php
trait Logger {
    public function log($message) {
        echo "[LOG] " . $message;
    }
}
class Utilisateur {
    use Logger;
}

$u = new Utilisateur();
$u->log("Utilisateur connecté.");  // Affiche : [LOG] Utilisateur connecté.
?>
<p>Ce système permet de factoriser du code sans casser la hiérarchie objet.</p/>
