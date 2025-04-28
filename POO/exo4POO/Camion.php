<?php
require_once 'Vehiculess.php';


class Camion extends Vehiculess{
    public const CATEGORIE = "Camion";
    public static function nombreDeRoues() : int {
        return 6;
    }
    public function afficherDetails() : string {
        parent::afficherDetails();
        return "❗ Camion soumis à réglementation de charge ❗";
        }
}
?>

<!-- Dans les deux cas, tu dois :
*    - Instancier une `Moto`, une `Voiture`, et un `Camion`
*    - Appeler `afficherDetails()` pour chaque objet
*    - Afficher aussi `nombreDeRoues()` sans instancier (ex: `Moto::nombreDeRoues()`)
* -->