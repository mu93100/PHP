<?php namespace App; ?> // si jamais on a déjà utilisé ds d'autres fichiers la class Chien Chat Animal

<h1>Héritage des classes en PHP</h1>
<h4>Héritage c'est quoi ?</h4>

<p>L'héritage permet à une class d'hériter des propriétés et méthodes d'une autre class</p>
<p>class Animal ::: class mère</p>
<p>class Chat Chien ETC ::: class CHD</p>

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
<h4>Redéfinir une méthod (Override)</h4>
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
<p>Une class abstraite ne êut pas être instanciée (pas de Nlle version de cet objet)</p>
<p> Elle sert de modèle aux class qui l'étendent et peut contenir :</p>
<li>des method normales avec du code</li>
<li>des method abstraites sans code (à définir obligatoirement, et qui sont continuées)</li>
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