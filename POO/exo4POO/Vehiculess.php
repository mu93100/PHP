<?php
//abstract class === pas d'objet instanciés dessus juste modele
abstract class Vehiculess{
    public const CATEGORIE = "Général";
    protected string $marque;
    protected string $modele;
    protected int $annee;

    function __construct($marque, $modele, $annee){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;  
    }
    // OU
    // public function getMarque() : string {
    //     return $this->marque;
    // }
    // public function getModele() : string {
    //     return $this->modele;
    // }
    // public function getAnnee() : string {
    //     return $this->annee;
    // }        avec
    // public function afficherDetails($a, $b, $c) : string {
    //     return 'Marque : {Vehicule->getMarque}<br>Modèle : {Vehicule->getModele}<br>Année : {Vehicule->getAnnee}<br>Catégorie' . static::CATEGORIE;
    // }
    public function afficherDetails() : string {
        return "Marque : {$this->marque}<br>Modèle : {$this->modele}<br>Année : {$this->annee}<br>Catégorie" . static::CATEGORIE;
    // static::CATEGORIE ::: si on met self :: ça affiche la cat. de la const // on met static pour les cat des class CHD
    }
    public static function nombreDeRoues() : int {
        return 4;
    }
};
echo 'Catégorie : ' . Vehiculess::CATEGORIE;

?>