<h1>P R O F I L</h1>
<?php
session_start();
var_dump($_SESSION);

$users=[
    "facundo" => [
        "id" => 123,
        "produits" => [
            "produit1" => "chaussettes",
            "produit2" => "bob",
            "produit3" => "sac",
        ]
    ],
    "muriel" => [
        "id" => 773,
        "produits" => [
            "produit1" => "bob",
            "produit2" => "casquette",
            "produit3" => "sac",
        ]
    ],
    "nassuf" => [
        "id" => 773,
        "produits" => [
            "produit1" => "lunettes",
            "produit2" => "casquette",
            "produit3" => "chaussures",
        ]
    ],
]
?>