<?php
// require_once '/wamp64/www/PHP/POO/exo4POO/Vehiculess.php';
require_once 'Vehiculess.php';
require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Camion.php';

echo 'Catégorie : ' .Vehiculess::CATEGORIE;
echo "<br>";
echo 'Catégorie : ' .Voiture::CATEGORIE;
echo "<br>";
echo 'Catégorie : ' .Moto::CATEGORIE;
echo "<br>";
echo 'nombre De Roues : ' .Vehiculess::nombreDeRoues();
echo "<br>";
echo 'nombre De Roues : ' .Voiture::nombreDeRoues();
echo "<br>";
echo 'nombre De Roues : ' .Moto::nombreDeRoues();

echo "<br>";echo "<br>";
$moto1 = new Moto('yamaha', 800, 2020 );
echo $moto1->afficherDetails();

echo "<br>";echo "<br>";
$voiture1 = new Voiture('volvo', 480, 1988 );
echo $voiture1->afficherDetails();

echo "<br>";echo "<br>";
$camion1 = new Camion('truck', 'X100', 2023 );
echo $moto1->afficherDetails();
?>

<h1>Gestionnaire de Véhicules</h1>
<!-- 
<ul>
    <li><?php  ?></li>
</ul> -->