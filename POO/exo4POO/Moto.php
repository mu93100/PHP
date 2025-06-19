<?php
class Moto extends Vehiculess{
    public const CATEGORIE = "Moto";
    public static function nombreDeRoues() : int {
        return 2;
    }
    public function afficherDetails() : string {
        //ou svar = parent::afficherDetails(); et $var . "❗ AttentETC
        return parent::afficherDetails() . "❗ Attention : équipement obligatoire pour la moto ❗";
        }
}

?>
<!-- Dans les deux cas, tu dois :
*    - Instancier une `Moto`, une `Voiture`, et un `Camion`
*    - Appeler `afficherDetails()` pour chaque objet
*    - Afficher aussi `nombreDeRoues()` sans instancier (ex: `Moto::nombreDeRoues()`)
* 
* Marque : Yamaha
* Modèle : MT-07
* Année : 2020
* Catégorie : Moto
* Attention : équipement obligatoire pour la moto.
* Nombre de roues : 2-->