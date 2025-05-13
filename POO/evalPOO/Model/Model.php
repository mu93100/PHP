<?php

class Model{
    protected static int $id =0; //incrémentation
    protected string $refModele;
    public string $marque;
    public string $nom;
    public float $prix;
    public string $photo = "assets/default.webp";

    public const GENRE = "Femme";
    public const CATEGORIE = "Général";

    function __construct(string $refModele, string $marque, string $nom, float $prix, string $photo){
        self::$id++;
        $this->refModele = $refModele;
        $this->marque = $marque;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->photo = $photo;
    }

    function afficherCategories() : string {
        return  static::CATEGORIE . ' ' . static::GENRE  . "<br>";

    }
    function afficherModelUser() : string|int|float {
        return 'Marque : ' . $this->marque . "<br>" . 'Modèle : ' .$this->nom . "<br>" . 'Prix : ' . $this->prix . " £<br>"; 
    }
    function afficherRefModel() : int|string {
        echo "$this->refModele" . "<br>";
        return self::$id++ . "<br>";
    }
}

// class Teeshirt extends Model{
//     public const GENRE = "Femme";
//     public const CATEGORIE = "Tee-shirt";
// }
// $t25pe_01 = new Teeshirt('t25pe_01', 'L2r*015', "Roma", 37.50);
// echo $t25pe_01->afficherCategories();




class Jupe extends Model{
    public const CATEGORIE = "Jupe";
}



// prenser à mettre les propriétés en protected et pas en public
// pas de getter et setter
// utilisation de l'id est incorrecte je n'enleve pas de point ici
// 17/20
?>