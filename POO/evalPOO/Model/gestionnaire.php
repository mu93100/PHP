<?php

require_once 'Model.php';
require_once 'Blouson.php';
require_once 'Teeshirt.php';

$t25pe_01 = new Teeshirt('T25PE_01', 'L2r*015', "Roma", 37.50, "assets/tlamer.png");
$t25pe_02 = new Teeshirt('T25PE_02', 'Kulte', "Vacances", 28, 'assets/tkult.png');
$t25pe_03 = new Teeshirt('T25PE_03', 'Coco', "Trash", 28, "assets/trash.png");


echo $t25pe_01->afficherCategories();
echo $t25pe_01->afficherModelUser();
echo $t25pe_01->afficherRefModel();

echo $t25pe_02->afficherCategories();
echo $t25pe_02->afficherModelUser();
echo $t25pe_02->afficherRefModel();

echo $t25pe_03->afficherCategories();
echo $t25pe_03->afficherModelUser();
echo $t25pe_03->afficherRefModel();

$b25pe_01 = new Blouson('B25PE_01', 'VAVA DUDU', "Fragile", 250, "assets/default.webp");
$b25pe_02 = new Blouson('B25PE_02', 'vv80', "arc en ciel", 250, "assets/b80.png");
$b25pe_03 = new Blouson('B25PE_03', 'Nicole', "Florida", 250, "assets/bteddy.png");

echo $b25pe_01->afficherCategories();
echo $b25pe_01->afficherModelUser();
echo $b25pe_01->afficherRefModel();

echo $b25pe_02->afficherCategories();
echo $b25pe_02->afficherModelUser();
echo $b25pe_02->afficherRefModel();

echo $b25pe_03->afficherCategories();
echo $b25pe_03->afficherModelUser();
echo $b25pe_03->afficherRefModel();




?>
<style>
    img{
        width: 8rem;
        height :auto
    }
</style>
