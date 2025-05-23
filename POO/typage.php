<style>*{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}</style>
<h1>Typage de class en php</h1>

<p>Objectif : <br>bien comprendre et bien utiliser le typage ds les Ptés, les arguments, le constructeur...</p>
<p>compatible depuis php 7.4</p>
<h3>Types autorisés : int    float    string    bool    array    object    ?type   int|string</h3>
<p>on peut avoir ? avec ts les types ex: ?string $description = null ::: soir string soit null</p>
<p>int|string  int OU string</p>
<?php
class Produit{
    private int $id;                     // on attend un entier
    private string $nom;                 // on attend une chaine de caractères
    private float $prix;                 // on attend un nb décimal
    private ?string $description = null; // ::: soit un string, soit rien et on commence à rien
    private bool $disponible = true;      // on attend un boolean true ou false

    public function __construct(int $id, string $nom, float $prix, ?string $description, bool $disponible) {
        
    }
}
?>
<p>Les types permettent de sécuriser les données</p>
<p>On exige que les données soient du type attendu
<br>ici ds class Produit :::int, string, float, ?string</p>
<h4>Typage ds les method</h4>

<?php
class Panier{
    private array $produits = []; // j'attends à ce que $produit soit un tab.

    public function ajouterProduit(string $a) :array { // :array ::: la Fo retourne un tab. avec RETURN
// (string $a)::on impose que le param $a soit un string
        $this->produits[] = $a;
        return $this->produits; // on retourne le tab.
    }
}
class Article{
    private string $nom;                 
    private float $prix;                 
    private bool $disponible = true;      

    public function __construct(string $nom, float $prix, bool $disponible) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->disponible = $disponible;
    }
    public function getNom() : string { // on exige que la Fo retourne un string avec RETURN
        return $this->nom;
    }
    public function setNom(string $b) : void { // on exige que la Fo retourne RIEN avec RETURN
        $this->nom = $b;
    }
    public function getPrix() : void { // avec echo pas de return
        echo $this->prix;
    }
    public function setPrix(float $c) :void {
        $this->prix = $c;
    }
    public function getDispo() : bool {
        return $this->disponible;
    }
}
?>
<h4>Erreurs de typage</h4>
<p>Si on met un type incorrect, on aura une erreur PHP FATAL ERROR</p>

<h4>Typage strict</h4>
<p>En mettant la Fo  declare(strict_type=1); en haut du fichier php, on active le typage strict</p>
<p>Avec ce mode PHP NE CONVERTIT PAS les types int et string ::: A EVITER ou pour code</p>

<p>https://tainix.fr/article-technique/Bonnes-pratiques-PHP-2-typage-protection-et-comparaison-stricte</p>

<h3>Les types disponibles en PHP</h3>
<li>int : un entier</li>
<li>string : une chaine de caractères</li>
<li>bool : un booléen, ne peut donc contenir que true ou false</li>
<li>array : un tableau</li>

<p>Mais il y en a d’autres :</p>
<li>float : un nombre décimal à virgule</li>
<li>object : l’instance d’une classe</li>
<li>callable : une fonction qui peut être appelée</li>
<li>iterable : cela signifie qu’il peut être parcouru par un foreach. Donc soit un tableau, soit un objet qui implémente l’interface Iterator</li>
<li>mixed : représente n’importe quel type !</li>
<li>ressource : représente une ressource externe, comme des fichiers ou la connexion à une base de données</li>
<li>null : ne peut contenir que la valeur « null »</li>
<li>true : ne peut contenir que la valeur « true »</li>
<li>false : ne peut contenir que la valeur « false »</li>

<p>Et les types dédiés aux retours :</p>
<li>void : indique qu’une fonction ne retourne pas de valeur</li>
<li>never : indique qu’une fonction ne retourne jamais rien, par exemple si elle émet une exception ou si elle déclenche (volontairement) une boucle infinie</li>
