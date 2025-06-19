<!-- /*
=====================================================
🏀 EXERCICE 1 : Classe JoueurDeBasket
🧾 Objectif :
Créer une classe `JoueurDeBasket` représentant un joueur avec :
- nom (string)
- numéro de maillot (int)
- points marqués (int)

✅ Fonctionnalités attendues :
- Constructeur typé
- Méthode `marquerPoints(int $nb)` qui ajoute des points +2 +3
- Méthode `statistiques()` qui retourne un résumé nb de Pt marqués en tout
=====================================================
*/ -->
<?php
class JoueurDeBasket{
    private string $nom;
    private int $numeroMaillot;
    private int $points;

    public function __construct(string $n, int $nu){
        $this->nom = $n;
        $this->numeroMaillot = $nu;
        $this->points = 0;
    }
    public function marquerPoints(int $nb) {
        $this->points +=$nb;
    }
    public function getStatistiques() : string {
        return "le joueur $this->nom avec le maillot $this->numeroMaillot a marqué $this->points points ";
    }
}
$joueur = new JoueurDeBasket('MIAOU', 41);
print_r ($joueur);
echo "<br>";
print_r($joueur->marquerPoints(5));
print_r ($joueur);
print_r($joueur->marquerPoints(9));
print_r ($joueur);
$joueur1 = new JoueurDeBasket('nini', 24);
print_r($joueur1->marquerPoints(9));
print_r ($joueur1);
$joueur2 = new JoueurDeBasket('fafa', 17);
print_r($joueur2->marquerPoints(7));
print_r ($joueur2);
echo "<h2 style = 'font-family: Verdana, Geneva, Tahoma, sans-serif; color:blue;'> {$joueur2->getStatistiques()}</h2>";

?>
<!-- // /*
// =====================================================
// 📦 EXERCICE 2 : Classe ProduitEnStock

// 🧾 Objectif :
// Créer une classe `ProduitEnStock` représentant un produit avec :
// - nom du produit (string)
// - quantité en stock (int)
// - prix unitaire (float)

// ✅ Fonctionnalités attendues :
// - Constructeur avec typage
// - Méthode `ajouterStock(int $nb)`
// - Méthode `valeurStock()` (quantité * prix)
// =====================================================
// */ -->
<?php
class ProduitEnStock{
    private string $nomP;
    private int $stock;
    private float $prix;

    public function __construct(string $a, int $b, float $c)
    {
        $this->nomP = $a;
        $this->stock = $b;
        $this->prix = $c;
    }
    // public function ajouterStock(int $nb) : int {
    //     return $this->stock +=$nb;
    // }
    public function ajouterStock(int $nb) : string|int { 
        if ($nb>0) {
            return $this->stock +=$nb;
        }else {
            return "🐸E R R E U R  Veuillez rentrer une val. positive"; // return null;
        }
    }
    public function valeurStock() : float {
        return round($this->stock * $this->prix, 2); //round (résultat, chiffre)-->arrondir (résultat) à (chiffre) après la virgule
    }
}

$produit1 = new ProduitEnStock("pâtes", 2, 10.53);
$produit1->ajouterStock(15);
echo'<pre>';
print_r($produit1);
echo '</pre>';
$produit1->ajouterStock(3);
echo'<pre>';
print_r($produit1);
echo '</pre>';
echo "total stock : {$produit1->valeurStock()}";
$produit2 = new ProduitEnStock("gauffres", 2, 5.60);
$produit2->ajouterStock(8);
print_r( $produit2->ajouterStock(0));
echo "ajouter stock" . $produit2->ajouterStock(0);

echo'<pre>';
print_r($produit2);
echo '</pre>';
?>
<!-- <style>nn{font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;}</style> -->

<form action="" method="POST">
    
</form>