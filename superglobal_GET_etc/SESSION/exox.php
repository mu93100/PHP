<!-- EXO 1
Créer un tableau associatif $personne contenant les clés suivantes : nom, prenom, age et ville, avec les valeurs de ton choix. Affiche le tableau avec print_r.

Ajouter un nouvel élément à un tableau associatif $personne avec la clé profession et la valeur de ton choix. Affiche le tableau.

Supprimer un élément du tableau associatif $personne (par exemple la clé ville) en utilisant unset().

Crée un tableau associatif appelé $produit avec les clés : nom, prix, quantite. Ensuite, affiche uniquement les valeurs du tableau.

Crée un tableau associatif de plusieurs livres, chaque livre contenant titre, auteur, année. Ensuite, affiche la liste des titres des livres avec une boucle foreach. 
EXO 2
Fonctions simples avec tableaux associatifs

Écris une fonction afficherInfos($tableau) qui prend un tableau associatif et affiche chaque clé et valeur.

Crée une fonction ajouterElement($tableau, $cle, $valeur) qui ajoute un élément au tableau associatif et le retourne.

Crée une fonction supprimerElement($tableau, $cle) qui supprime une clé du tableau et retourne le tableau modifié.

Crée une fonction trierTableau($tableau) qui trie un tableau associatif par ordre alphabétique des clés.

Écris une fonction filtrerNotes($notes, $seuil) qui retourne uniquement les étudiants ayant une note >= au seuil.
EXO 3
Crée une fonction calculerMoyenne($notes) qui retourne la moyenne des valeurs d’un tableau associatif $notes.

Crée un tableau associatif $panier contenant des articles avec leurs prix unitaires et quantités. Écris une fonction calculerTotal($panier) qui retourne le prix total à payer.

Crée un tableau de plusieurs personnes (nom, age) et écris une fonction afficherPersonnesMajores($personnes) qui affiche les personnes ayant 18 ans ou plus.

Crée un tableau associatif d’animaux (nom => espèce) et écris une fonction afficherParEspece($animaux, $espece) pour afficher seulement les animaux d’une certaine espèce.

Crée une fonction inverserTableau($tableau) qui retourne un tableau associatif avec les clés et valeurs inversées (valeur devient clé et inversement).-->
<?php
$tableau=[
    "telephon"=>"iphone",
    "tablet"=>"smsung",
    "ordinateur"=>"hp"
];
function afficherInfos($tableau){
foreach ($tableau as $cle =>$valeur){
    echo $cle."  " .$valeur ."<br>" ;
    echo "🧑‍💼🧑‍💼🧑‍💼🧑‍💼";
}
}
afficherInfos($tableau);

echo "<br>";
echo "🥨";

function ajouterElement($tab, $cle, $valeur){
    $tab[]= "$cle=> $valeur";
    return $tab;
    echo "$cle=> $valeur";
}
echo "$cle=> $valeur";
ajouterElement($tableau, "montre connectée","cherry");
echo "🥨";

print_r (ajouterElement($tableau, "montre connectée","cherry"));
afficherInfos($tableau)
?>