<?php 
$produits = [
    [
        'article' => 'jean',
        'couleur' => 'bleu',
        'prix' => 49.99,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ],
    [
        'article' => 't-shirt',
        'couleur' => 'blanc',
        'prix' => 19.99,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ],
    [
        'article' => 'chaussures',
        'couleur' => 'noir',
        'prix' => 89.90,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ]
];
foreach ($produits as $index) {
    $url ="page2.php?article=".urlencode($index["article"])."&couleur=".urlencode($index["couleur"]).
    "&prix=".urlencode($index["prix"])."&description=".urlencode($index["description"]);
    echo "<p><a href=\"$url\">Voir le produit : {$index['article']} ({$index['couleur']}) - {$index['prix']} €</a></p>";
};   //pour href --> "$url" ne marchera pas --> on met les \ pour les ""
?>
<h3>La fonction  urlencode()</h3>
<p>sert à préparer une chaine de caractère pour être utilisée ds une URL<br>
pour passer du texte sans l'abîmer === si jamais il y a des erreurs</p>
<p>EX ::</p>
<?php

echo '<a href="page2.php?nom=Jean Pierre&ville=St-Étienne">Aller </a>';
//  👉 L’URL est cassée à cause des espaces, caractères spéciaux, accents ETC
$nom = 'Jean Pierre';
$ville = 'St-Étienne';
$url = 'page2.php?nom=' . urlencode($nom) . '&ville=' . urlencode($ville);
echo '<a href="' . $url . '">  Aller2</a>';// URL générée :
// page.php?nom=Jean+Pierre&ville=St-%C3%89tienne
// ✅ Fonctionne parfaitement, l’URL est propre et sécurisée.
?>