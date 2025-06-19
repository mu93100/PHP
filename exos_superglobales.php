<?php
function br() {
    echo "<br>";
}
/**
* Exercice 1 : Créer un tableau d’articles avec leurs prix et les afficher dans une boucle.
*/
$tab=["pompon"=>1.20,
    "jupe"=>20,
    "poivre"=>0.25,
    "sel"=>0.20,
    "camion"=>2.30,
];
foreach ($tab as $article => $prix) {
    echo "l'article " . $article . " coûte :  " . $prix . " €";
    br();
}
br();
/**
* Exercice 2 : Ajouter un article au tableau et réafficher la liste.
*/
function reafficher($t,$a,$b){
    $t[$a]=$b;
    foreach ($t as $article => $prix) {
        echo "l'article " . $article . " coûte :  " . $prix . " €";
        br();
}
}
reafficher($tab,"pantalon", 29);


/**
* Exercice 3 : Créer un panier (tableau), ajouter des articles dynamiquement.
*/

/**
* Exercice 4 : Calculer le total du panier.
*/

/**
* Exercice 5 : Créer une session pour stocker le panier.
*/

/**
* Exercice 6 : Gérer l’ajout au panier via un lien (GET)
* Exemple de lien : ?add=Stylo
*/

/**
* Exercice 7 : Utiliser un cookie pour retenir le nom du visiteur.
*/

/**
* Exercice 8 : Créer une page de connexion simple avec login et mot de passe.
*/

/**
* Exercice 9 : Afficher les boutons Connexion / Déconnexion selon l’état de la session.
*/

/**
* Exercice 10 : Créer une fonction utilitaire afficherPanier() qui affiche le contenu du panier.
*/

?>
