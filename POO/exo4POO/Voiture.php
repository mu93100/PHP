<?php
require_once 'Vehiculess.php'; // ??? je ne sais pas si on le met ou pas

final class Voiture extends Vehiculess{
    public const CATEGORIE = "Voiture";
}
$volvo = new Voiture("Volvo", 480, 1995);
// echo "<pre>";
// print_r($volvo);
// echo "</pre>";
// echo '🐱' . $volvo->afficherDetails("Volvo", 480, 1995);
// echo "<br>";
// echo 'Nb de roues : ' . $volvo->nombreDeRoues();
// echo "<br>";
// echo 'Catégorie : ' . Voiture::CATEGORIE;
?>
<!-- Dans les deux cas, tu dois :
*    - Instancier une `Moto`, une `Voiture`, et un `Camion`
*    - Appeler `afficherDetails()` pour chaque objet
*    - Afficher aussi `nombreDeRoues()` sans instancier (ex: `Moto::nombreDeRoues()`)
* -->