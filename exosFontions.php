<?php

use LDAP\Result;

function br(){
    echo "<br>";
}
/*
1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/
function greet() {
    echo "Hello world !";
}
greet();
br();
/*
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/ 
$name="Jane";
$a="claude";
function greetUser($name) {
    echo "hello, $name";
}
greetUser("nassuf");br();
greetUser($name);br();
greetUser($a);
br();

/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/
function sum($a, $b) {
    return $a +$b;
}
echo sum(56,5);
br();
/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre 
et retourne la somme de tous les éléments du tableau.
*/
$numbers=[1,2,3,4,5];
function sumArray($numbers) {
    echo "sum \$numbers = " . array_sum($numbers) ;
}
echo sumArray($numbers);br();

$numbersSh = [1, 2, 3, 4];
function sumArraySh($numbersSh) {
    $somme = 0;
    foreach ($numbersSh as $value) {
        $somme += $value;
    }
    return $somme;
}

echo sumArraySh($numbersSh);br();
/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée 
$timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!
Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : 
function salut($name='Cynthia'){echo "Salut $name";})

*/
function greetWithTime($name, $timeOfDay="day") { // "day" === parametre par défaut
    echo "Good $timeOfDay, $name"; 
}
greetWithTime("roro");br();
greetWithTime("roro", "morning");br();

function greetWithTimeNajiba($name="najiba"){
    function timeOfDay(){
        return date('d/m/Y H:i:s');
    }
    echo "  Salut  " ." " . $name ." ".timeOfDay() ;
}
greetWithTimeNajiba();br();br();


/*
6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant 
trois noms de fruits.
*/
function getFruits() {
    return ["banane", "orange", "grenade"];
}
print_r( getFruits());
/*
7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et 
retourne cette chaîne en ordre inversé.
*/
function reverseString($str="") { // OU reverseString($str) 

    return strrev($str); 
}
echo reverseString("il faut que je m'améliore");br();

function reverseStringMatt($str) {
    $reverse = "";
    $i = strlen($str) - 1;  // strlen compte le nb de caractères /-1 car index 0 --> on met ts les caractères en index
    while($i >= 0) {
        $reverse .= $str[$i]; // on est sur l'index $i
        $i--; //  on commence par la fin
    }

    // for ($i = strlen($str) - 1; $i >= 0; $i--) {
    //     $reverse .= $str[$i];
    // }

    return $reverse;
}
echo reverseStringMatt("elicaF");br();
/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier 
que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. 
Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/
function divide($a, $b) {
    if ($b!==0) {
        return $a / $b;
    }else {
        return 'erreur de calcul';
    }
} 
echo divide(12, 0);br();
$a=2;
$b=3;
echo divide($a, $b);br();

/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre 
et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/
function generateMultiplicationTable($number) {
    
    for ($i=0; $i <= 10; $i++) {  
        print_r("$number x $i = " . $number*$i);  br(); 
        // echo "$number x $i = " . $number*$i;br();
    }
    }
echo generateMultiplicationTable(68);br();

function generateMultiplicationTableNa($numberNa){
    for ($n=1; $n<=10; $n++){
        $resultat[$n]=$n*$numberNa;
    }
    // foreach($resultat as $n=> $result){
    //     echo "$number x $n = $result<br>";
    // }
    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
}

generateMultiplicationTableNa(9);
echo "<br>";
/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre 
un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" 
si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".
*/
$user=[
    "age" => 21,
    "hasLicense" => true
];
function checkEligibility($age, $hasLicense) {
    $user = ["age", "hasLicense"];
    // $age = $user["age"];
    // $hasLicense = $user["hasLicense"];
    foreach ($user as $cle => $valeur) {
        if ($age >18 && $hasLicense === true) {
            return "Eligible";
        }else {
            return "N O T   Eligible";
        }
    } 
};
echo checkEligibility(21, false);br();

function checkEligibilityNa($age, $hasLicense){
    if ($age >=18 && $hasLicense === true){
        return "eligible";
    }else {
        echo "not eligible";
    }
    }
    echo checkEligibilityNa(21, true);br();
    
$age = 19;
$hasLicense = false;

function checkEligibilitySh($age, $hasLicense){
if($age < 18 || $hasLicense === false){
    echo "Not Eligible";
}else{
    echo "Eligible";
}
}

echo checkEligibilitySh($age, $hasLicense);





echo "<hr><h3>Exercices PHP — Fonctions, Tableaux, Affichage HTML</h3>";

// /*
// | Objectif : Approfondir la manipulation de tableaux, l'affichage HTML
// | et la création de fonctions utiles dans des cas concrets (panier, fiche produit, etc).
// | Niveau : Débutant
// */

echo "<h1>Liste des exercices PHP</h1>" . "<hr><p>EXERCICE 1— Afficher une variable simple</p>";
// * Crée une variable \$prenom avec ton prénom et affiche-la dans une balise <h2>
$prenom = "miruel";
echo "<h2>$prenom</h2>";

echo "<hr><p>EXERCICE 2 — Affichage d’une fiche produit en html</p>"; 
// * Crée un tableau associatif avec 'nom' => 'Stylo', 'prix' => 1.5
// * Affiche ces données dans une structure HTML (ex : <div class='card'>).
?>
<style>
.card{
    width: 5rem;
    height: 10rem;
    box-shadow: 10px 18px 53px 14px rgba(0,0,255,0.79);
    margin: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 0.3rem;
}
.half_card{
    color: tomato;
    /* text-shadow: 10px 18px 53px 10px rgba(0,0,255,0.79); */
    border: 3px dotted black;
    padding: 0.1rem;
}
.card33{
    /* width: 5rem;
    height: 10rem; */
    box-shadow: 10px 10px 33px 10px rgba(72, 52, 251, 0.79);
    border: 3px dotted black;
    padding: 1rem;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.card3{
    width: 5rem;
    height: 10rem;
    box-shadow: 10px 10px 33px 4px rgba(251, 118, 52, 0.79);
    border: 3px dotted black;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.half_card3{
    background-color: rgba(26, 255, 0, 0.79); 
    color: white;
    font-weight: 900;
    border: 3px dotted black;
    border-radius: 1rem 1rem 0 0;
    padding: 0.1rem;
}
.half_card33{
    color: tomato;
    /* text-shadow: 10px 18px 53px 10px rgba(0,0,255,0.79); */
    padding: 1rem;
}
.container_produitss{
    background-color: lightcoral;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.container_produit{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.container_produitss{
    background-color: tomato;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.produit_nom{
    background-color: black;
    color: white;
    padding: 1rem;
    width: 6rem;
    align-items: start;
    border-radius: 0.5rem 0.5rem 0 0;
    border: 1px solid black;
}
.produit_prix{
    color: blue;
    font-size: larger;
    width: 6rem;
    padding: 1rem;
    align-items: start;
    border: 1px solid black;
    border-radius: 0 0 0.5rem 0.5rem;
}
</style>


<?php
$tab=[
    'nom' => 'Stylo', 
    'prix' => 1.5
];

?>
<div class="card">
    <?php 
    foreach ($tab as $valeur) {
    echo "<div class=' half_card'> $valeur</div>";  
    } ?>
</div>
<?php
// foreach ($tab as $valeur) {
//     echo "<div class='card half_card'> ::: $valeur</div>";
// }
echo "<hr><p>* EXERCICE 3 — Boucle sur un tableau simple</p>";
// * Crée un tableau de 5 prénoms et affiche-les dans une liste HTML <ul>.
// * ➕ Fonction utile : foreach
// */
$tab2=["roor", "fafa", "mimi", "agnès", "nisou"];
foreach ($tab2 as $prenom) {
    echo "<ul>➕ $prenom</ul>";
}
// /*
echo "<hr><p>EXERCICE 4 — Générer plusieurs 'cartes produit'</p>";
// * À partir d’un tableau contenant plusieurs produits (nom + prix),
// * boucler et afficher chaque produit dans une carte HTML.
$tab3=[
    [
        'nom' => 'Stylo', 
        'prix' => 1.5
    ],
    [
        'nom' => 'crayon', 
        'prix' => 1.1
    ],
    [
        'nom' => 'cahier', 
        'prix' => 2.1
    ]
];
?>
<div class="card33" >
    <?php 
    foreach ($tab3 as $valeur) {
            echo "<div class='card3'><div class='half_card3'>" .  $valeur["nom"] . "</div>  <div class='half_card33'>" . $valeur["prix"] ." £</div></div>";br();
        }
    ?>
</div>

<?php

$tabProduct = [
    "PC Gamer" => 3000,
    "Ferrari Carbone" => 243000
];
foreach($tabProduct as $nom => $prix): ?>
    <div class="card">
        <h3><?php echo $nom; ?></h3>
        <p>Prix : <?php echo number_format($prix, 2, ',', ' ') . " €"; ?></p>  
        <!-- echo number_format($prix, 2, ',', ' ')  2 -> nb de décimales , -> on veut une virgule pour les décimales ' ' -> on veut un espace pour les milliers-->
    </div>
<?php endforeach; ?>
<?php
echo "<h2>4. Cartes produit HTML avec boucle</h2>";
echo "<hr><p>* EXERCICE 5 — Addition simple</p>";

// * Crée deux variables $prix1 et $prix2, calcule la somme et affiche
// * le total sous forme de texte : "Total : XX €"
$prix1 = 2.5; 
$prix2 = 6.8;

echo "<p>Total :" .  ($prix2 + $prix1) . " €</p>";

echo "<hr><p>* EXERCICE 6 — Ajouter la TVA</p>";
// * Crée une fonction ajouterTVA($prix) qui retourne le prix TTC (20% de TVA).
// * ➕ Math : $prix * 1.2
function ajouterTVA($prix) {
    $ttc = $prix * 1.2;
    return $ttc;
}
echo ajouterTVA(10);

echo "<hr><p> * EXERCICE 7 — Compter des éléments</p>";
//
// * Crée un tableau de produits et affiche le nombre total de produits.
// * ➕ Fonction utile : count()
$tab4=["roor", "farine", "montre", "châle", "nacre"];
echo count($tab4);

echo "<hr><p>* EXERCICE 8 — Fonction d'affichage réutilisable</p>";
// * Crée une fonction afficherProduit($produit) qui prend un tableau associatif
// * et affiche une carte HTML avec le nom et le prix du produit.
?>
<style>

.container_produit{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.container_produitss{
    background-color: blue;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
}
.produit_nom{
    background-color: black;
    color: white;
    padding: 1rem;
    width: 6rem;
    align-items: start;
    border-radius: 0.5rem 0.5rem 0 0;
    border: 1px solid black;
}
.produit_prix{
    color: blue;
    font-size: larger;
    width: 6rem;
    padding: 1rem;
    align-items: start;
    border: 1px solid black;
    border-radius: 0 0 0.5rem 0.5rem;
}
</style>
<?php
$produitss=[
    ['nom' => 'stylo', 'prix' => 1.5],
    ['nom' => 'crayon', 'prix' => 1.1],
    ['nom' => 'critérium', 'prix' => 1.1],
    ['nom' => 'cahier', 'prix' => 2.1],
    ['nom' => 'taille crayon', 'prix' => 1.5],
    [ 'nom' => 'gomme', 'prix' => 1.1],
    [ 'nom' => 'feutre', 'prix' => 2.1],
    ['nom' => 'feuilles canson', 'prix' => 1.5],
    ['nom' => 'feuilles A3', 'prix' => 1.1],
    ['nom' => 'feuilles A4', 'prix' => 2.1 ]
];
function afficherProduit($produitss) {
    foreach ($produitss as $produit => $value) {
        echo "<div class='container_produit'><div class= 'produit_nom'>" . $value["nom"] . "</div><div class= 'produit_prix'>" . $value["prix"] . "</div></div>";
    }  
}
echo "<div class='container_produitss'>" . afficherProduit($produitss) . "</div>";
echo "<hr><p>* EXERCICE 9 — Total du panier</p>";
// * À partir d’un tableau de produits (chacun avec 'nom' et 'prix'),
// * calcule et affiche le total général avec une boucle.
echo "<h2>9. Total d'un panier</h2>";

echo "<hr><p>* EXERCICE 10 — Appliquer une remise</p>";
// * Crée une fonction appliquerRemise($prix, $pourcentage)
// * qui retourne le prix après réduction.
$prix = 50;
$pourcentage = 3;
$tab5 = ['nom' => 'chaise', 'prix' => 23];

function appliquerRemise($prix, $pourcentage){
    $reduction = $prix * ($pourcentage/100);
    $total = $prix - $reduction;
    return $total;
}
echo appliquerRemise($prix, $pourcentage);
$nouveauPrix = appliquerRemise($tab5['prix'], $pourcentage);
$tab5['prix'] = $nouveauPrix;
var_dump($tab5); // int devient un float (décimale) car %

echo "<hr><p>* EXERCICE 11 — Ajouter au panier</p>";
// * Crée une fonction ajouterAuPanier($panier, $produit)
// * qui retourne un nouveau tableau avec le produit ajouté.
$panier = ["mokotra", "tirus", "salsifis"];
$nxproduit = "nuage";
function ajouterAuPanier($panier, $nxproduit) {
    $panier[] = $nxproduit;   // on rajoute le $nxproduit à la fin
    return $panier;
}
$panier += ajouterAuPanier($panier, $nxproduit); //  += $panier sera toujours actualisé (avec x nouveau produits), sinon on peut mettre =
echo "<pre>";
print_r($panier);
echo "</pre>";
echo count($panier); br();
echo "<button>panier : " . count($panier) . " article(s)</button>";
echo "<hr><p>* EXERCICE 12 — Afficher un panier vide ou non</p>";
// * Vérifie si un tableau $panier est vide. S'il l’est, afficher un message,
// * sinon, afficher les produits.
// * ➕ Fonction utile : empty()

$panier1 = ["banana", "litchi"];

if (!empty($panier1)){
    echo "<p>Vérif panier vide ou rempli : not empty</p>";
}else{
    echo "<p>Vérif panier vide ou rempli : empty</p>";
}

echo "<hr><p>* EXERCICE 13 — Moyenne des notes</p>";
// * Crée un tableau de notes (ex : [12, 14, 18]) et calcule la moyenne.
// * ➕ Fonctions utiles : array_sum(), count()
$notes = [12, 14, 18];

function calculDemoyenne($array) {
    $moyenne = array_sum($array)/count($array);
    return $moyenne;
}
echo "<p>moyenne : " . calculDemoyenne($notes) . "</p>";

echo "<hr><p>* EXERCICE 14 — Trier un tableau par ordre croissant</p>";
// * Crée un tableau de prix, trie-le par ordre croissant.
// * ➕ Fonction utile : sort()
$prix = ["4.30", "12.80", "9.65", "4.55"];
echo sort($prix);
foreach ($prix as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

echo "<hr><p>* EXERCICE 15 — Filtrer produits à moins de 10 €</p>";
// * Crée une fonction qui retourne un tableau avec uniquement
// * les produits à moins de 10€.
// echo "<h5>15. Filtrer les produits abordables à moins de 10 €</h5>";

echo "<hr><p>* EXERCICE 16 — Tableau d’utilisateurs</p>";
// * Crée un tableau avec plusieurs utilisateurs (nom, email, âge)
// * et affiche-les dans des cartes HTML.
echo "<h2>16. Fiches utilisateurs</h2>";

echo "<hr><p>* EXERCICE 17 — Table de multiplication</p>";
// * Crée une fonction tableMultiplication($n) qui affiche la table du nombre donné.

echo "<h2>17. Table de multiplication</h2>";

echo "<hr><p>* EXERCICE 18 — Formater un prix</p>";
// * Crée une fonction formaterPrix($prix) qui :
// *  - affiche 2 chiffres après la virgule
// *  - ajoute "€"
// * ➕ Fonction utile : number_format()


echo "<h2>18. Formater un prix</h2>";

echo "<hr><p>* EXERCICE 19 — Afficher les produits chers</p>";
// * À partir d’un tableau de produits, affiche uniquement ceux
// * dont le prix est > 50€.


echo "<h2>19. Filtrer les produits chers</h2>";


echo "<hr><p>* EXERCICE 20 — Simuler un panier complet</p>";
// * À partir d’un tableau de produits avec :
// *  - nom
// *  - prix unitaire
// *  - quantité
// * Affiche chaque ligne avec prix total (prix * quantité)
// * puis affiche le total global du panier.
// */

echo "<h2>20. Panier complet (HTML + Calcul)</h2>";

?>

